<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Area;
use App\Models\City;
use App\Models\Location;
use Illuminate\Http\Request;

class PropertyController extends Controller
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
    public function create(Request $request)
    {
        $cities = City::all();
        $areas = Area::all();

        return view("properties.create", [
            "landlord" => $request->landlord,
            "cities" => $cities,
            "areas" => $areas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'address' => 'required|string',
            'landlord_id' => 'exists:landlords,id',
            // 'city_id' => 'exists:cities,id',
            // 'area_id' => 'exists:areas,id',
            'type' => 'nullable|in:house,plot',
            'list_in' => 'nullable|in:sell,rent',
            'sq_yard' => 'integer',
            'price' => 'integer',
            'allow_sublet' => 'nullable|boolean',
            'bedrooms' => 'integer',
            'bathrooms' => 'integer',
            'kitchens' => 'integer',
            'garages' => 'integer',
            'built_year' => 'integer',
            'amenities' => 'nullable|array',
            'media' => 'nullable|array',
            // Add other validation rules as needed
        ]);

        dd($validatedData);
        // Create a new Location using city_id and area_id
        // $location = Location::create([
        //     'city_id' => $validatedData['city_id'],
        //     'area_id' => $validatedData['area_id'],
        // ]);

        // Add location_id to the validatedData
        // $validatedData['location_id'] = $location->id;

        // Create a new Property using the validatedData
        // $property = Property::create($validatedData);
        
        // Handle File Uploads
        $mediaPaths = [];
        $propertyMediaFolder = 'property_media/' . $property->uuid;

        foreach ($request->file('uploadCV') as $file) {
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getSize();
            $fileExtension = $file->getClientOriginalExtension();

            // Validate file type, size, and duration
            // Add more validation rules as needed

            // Move the file to the property's media folder
            $file->move($propertyMediaFolder, $fileName);

            // Store the path in the mediaPaths array
            $mediaPaths[] = $propertyMediaFolder . '/' . $fileName;
        }

        // Save the mediaPaths array in the property's media attribute
        $property->media = $mediaPaths;
        $property->save();

        return "Created successfully";
        // Redirect to the property details page or index
        // return redirect()->route('properties.show', ['property' => $property->id])->with('success', 'Property created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
    }
}
