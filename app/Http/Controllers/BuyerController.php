<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Http\Requests\StoreBuyerRequest;
use App\Http\Requests\UpdateBuyerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuyerRequest $request)
    {
        // Create a new Landlord instance
        $buyer = new Buyer([
            'name' => $request->buyerName,
            'email' => $request->buyerEmail,
            'password' => Hash::make($request->buyerPassword),
            'phone' => $request->buyerPhone,
            // Add other fields
        ]);
    
        // Save the model to the database
        $buyer->save();

        return redirect()->route('public.home')->with([
            'buyerSuccess' => 'Buyer Registered successfully',
            'buyerFrom' => 'buyerSignup',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuyerRequest $request, Buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buyer $buyer)
    {
        //
    }

    function login(Request $request) {
        $email = $request->input('buyerEmail');
        $password = $request->input('buyerPassword');
        
        // Retrieve the user data from the database
        $buyer = Buyer::where('email', $email)->first();
    
        if ($buyer) {
            // Verify the password
            if (password_verify($password, $buyer->password)) {
                // Password is correct, create a session and return the user ID
                session()->put(["LoggedBuyer" => $buyer->id]);

                return redirect()->back();
                // if ($request->filled("next")) {
                // }else{
                //     error_log($request->input("next"));
                //     return redirect()->route("buyers.dashboard");
                // }

            } else {
                // Password is incorrect
                return redirect()->back()->with("buyerFail", "Password is not correct");
            }
        } else {
            // User not found
            return redirect()->back()->with("buyerFail", "Email not Found");
        }
    }
    
    public function logout(){
        if (session()->has('LoggedBuyer')) {
            session()->pull("LoggedBuyer");
            return redirect()->route("public.home")->with('buyerSuccess', 'Logged out Successfully');
        }else{
            return "m";
        }
    }

    public function dashboard(){
        // return "Dashboard <a href=" . route('buyers.logout') . ">Logout";
        return view("buyers.dashboard");
    }
}
