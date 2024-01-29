<?php

namespace App\Http\Controllers;

use App\Models\Landlord;
use App\Http\Requests\StoreLandlordRequest;
use App\Http\Requests\UpdateLandlordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class LandlordController extends Controller
{
    public function index()
    {
        $landlords = Landlord::all();
        return view('landlords.index', compact('landlords'));
    }

    public function create()
    {
        return view('landlords.create');
    }

    public function store(Request $request)
    {

        // Create a new Landlord instance
        $landlord = new Landlord([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            // Add other fields
        ]);
    
        // Save the model to the database
        $landlord->save();

        return redirect()->route('public.home')->with([
            'success' => 'Landlord Registered successfully',
            'from' => 'signup',
        ]);
    }

    public function show(Landlord $landlord)
    {
        return view('landlords.show', compact('landlord'));
    }

    public function edit(Landlord $landlord)
    {
        return view('landlords.edit', compact('landlord'));
    }

    public function update(Request $request, Landlord $landlord)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:landlords,email,' . $landlord->id,
            // Add validation rules for other fields
        ]);

        $landlord->update($request->all());

        return redirect()->route('landlords.index')
            ->with('success', 'Landlord updated successfully');
    }

    public function destroy(Landlord $landlord)
    {
        $landlord->delete();

        return redirect()->route('landlords.index')
            ->with('success', 'Landlord deleted successfully');
    }

    function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        
        // Retrieve the user data from the database
        $landlord = Landlord::where('email', $email)->first();
    
        if ($landlord) {
            // Verify the password
            if (password_verify($password, $landlord->password)) {
                // Password is correct, create a session and return the user ID
                session()->put(["LoggedLandlord" => $landlord->id]);
                return redirect()->route("landlords.dashboard");
            } else {
                // Password is incorrect
                return redirect()->back()->with("fail", "Password is not correct");
            }
        } else {
            // User not found
            return redirect()->back()->with("fail", "Email not Found");
        }
    }

    public function logout(){
        if (session()->has('LoggedLandlord')) {
            session()->pull("LoggedLandlord");
            return redirect()->route("public.home")->with('success', 'Logged out Successfully');
        }else{
            return "m";
        }
    }

    public function dashboard(){
        return view("landlords.dashboard");
    }
}
