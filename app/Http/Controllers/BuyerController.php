<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Http\Requests\StoreBuyerRequest;
use App\Http\Requests\UpdateBuyerRequest;
use App\Models\Area;
use App\Models\City;
use App\Models\Location;
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

    public function profile(Request $request){
        $buyer = Buyer::find($request->buyer->id);
        $cities = City::all();
        $areas = Area::all();

        return view('buyers.profile', [
            "buyer" => $buyer,
            "cities" => $cities,
            "areas" => $areas
        ]);
    }

    public function update(Request $request, $id){
        $buyer = Buyer::findOrFail($id);

        // Create a new Location only if it is changed, also deleting the older ones
        $hasCityChanged = $buyer->location->city->id != $request->city_id ? true : false;
        $hasAreaChanged = $buyer->location->area->id != $request->area_id ? true : false;

        if ($hasCityChanged || $hasAreaChanged) {
            $buyer->location->delete();
            $location = Location::create([
                'city_id' => $request->city_id,
                'area_id' => $request->area_id,
            ]);
        }
        
        // Add location_id to the validatedData
        $location_id = $location->id ?? $buyer->location->id;

        // Update name and email
        $buyer->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'about' => $request->about,
            'location' => $location_id
        ]);

        // Update profile image
        if ($request->hasFile('profile_picture')) {
            $fileName = time(). "_" . $request->file('profile_picture')->getClientOriginalName();
            $path = $request->file('profile_picture')->storeAs('public/profile-pictures', $fileName);

            $buyer->update([
                'profile_picture' => $path,
            ]);

        }

        return back()->with('success', 'Profile updated successfully.');
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

    public function dashboard(Request $request){
        // return "Dashboard <a href=" . route('buyers.logout') . ">Logout";
        return view("buyers.dashboard", [
            "buyer" => $request->buyer
        ]);
    }
}
