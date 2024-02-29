<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Area;
use App\Models\City;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $properties =  Property::where("landlord_id", $request->landlord->id)->get();

        return view("landlords.properties.properties", [
            "properties" => $properties
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){
        $cities = City::all();
        $areas = Area::all();

        return view("landlords.properties.create", [
            "landlord" => $request->landlord,
            "cities" => $cities,
            "areas" => $areas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

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
        
        // dd($validatedData);
        // Create a new Location using city_id and area_id
        $location = Location::create([
            'city_id' => $request->city_id,
            'area_id' => $request->area_id,
        ]);
        
        // Add location_id to the validatedData
        $validatedData['location_id'] = $location->id;
        
        $uuid = Str::uuid()->toString();

        // Create a new Property using the validatedData
        $property = Property::create([
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'address' => $request->input("address"),
            'landlord_id' => $request->input("landlord_id"),
            'location_id' => $location->id,
            'type' => $request->input("type"),
            'list_in' => $request->input("list_in"),
            'sq_yard' => $request->input("sq_yard"),
            'price' => $request->input("price"),
            'allow_sublet' => $request->input("allow_sublet"),
            'bedrooms' => $request->input("bedrooms"),
            'bathrooms' => $request->input("bathrooms"),
            'kitchens' => $request->input("kitchens"),
            'garages' => $request->input("garages"),
            'built_year' => $request->input("built_year"),
            'amenities' => $request->input("amenities"),
            'status' => "available",
            'uuid' => $uuid,
            'media' => [],
        ]);
        
        if ($request->hasFile("media")) {
            // Handle File Uploads
            $mediaPaths = [];
            $propertyMediaFolder = 'property_media/' . $uuid;
        
            $i = 0;
            foreach ($request->file('media') as $file) {
                $fileName = $i . "_" . $file->getClientOriginalName();
        
                // Validate file type, size, and duration
                // Add more validation rules as needed
        
                // Store the file in the storage/app/public directory
                $path = $file->storeAs('public/' . $propertyMediaFolder, $fileName);
        
                // Store the path in the mediaPaths array
                $mediaPaths[] = $path;
                $i++;
            }
        
            // Save the mediaPaths array in the property's media attribute
            $property->media = $mediaPaths;
            $property->save();
        }

        return "Created successfully";
        // Redirect to the property details page or index
        // return redirect()->route('properties.show', ['property' => $property->id])->with('success', 'Property created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id){
        $property = Property::findOrFail($id);

        return view("public.property", [
            "property" => $property,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request){
        $property = Property::findOrFail($id);
        $cities = City::all();
        $areas = Area::all();

        return view("landlords.properties.edit", [
            "landlord" => $request->landlord,
            "property" => $property,
            "cities" => $cities,
            "areas" => $areas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){

        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'address' => 'required|string',
            'landlord_id' => 'exists:landlords,id',
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
        
        $property = Property::findOrFail($id);

        // Create a new Location only if it is changed, also deleting the older ones
        $hasCityChanged = $property->location->city->id != $request->city_id ? true : false;
        $hasAreaChanged = $property->location->area->id != $request->area_id ? true : false;

        if ($hasCityChanged || $hasAreaChanged) {
            $property->location->delete();
            $location = Location::create([
                'city_id' => $request->city_id,
                'area_id' => $request->area_id,
            ]);
        }
        
        // Add location_id to the validatedData
        $location_id = $location->id ?? $property->location->id;
        
        $uuid = $property->uuid;

        // File handling
        $mediaToKeep = [];

        if ($request->has("existingMedia")) {
            $mediaToKeep = array_intersect($property->media, $request->input("existingMedia"));
            $mediaToKeep = array_values($mediaToKeep);
            $mediaToDelete = array_diff($property->media, $request->input("existingMedia"));
            foreach ($mediaToDelete as $mediaPath) {
                // Construct the full path to the media file
                Storage::delete($mediaPath);
            }
        }
        // dd($mediaToKeep);

        if ($request->hasFile("media")) {
            // Handle File Uploads
            $propertyMediaFolder = 'property_media/' . $uuid;
        
            $i = 0;
            foreach ($request->file('media') as $file) {
                $fileName = $i . "_" . $file->getClientOriginalName();
        
                // Validate file type, size, and duration
                // Add more validation rules as needed
        
                // Store the file in the storage/app/public directory
                $path = $file->storeAs('public/' . $propertyMediaFolder, $fileName);
        
                // Store the path in the mediaPaths array
                $mediaToKeep[] = $path;
                $i++;
            }
        
        }
        // Save the mediaPaths array in the property's media attribute
        $property->media = $mediaToKeep;

        // Update the property
        $property->update([
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'address' => $request->input("address"),
            'landlord_id' => $request->input("landlord_id"),
            'location_id' => $location_id,
            'type' => $request->input("type"),
            'list_in' => $request->input("list_in"),
            'sq_yard' => $request->input("sq_yard"),
            'price' => $request->input("price"),
            'allow_sublet' => $request->input("allow_sublet"),
            'bedrooms' => $request->input("bedrooms"),
            'bathrooms' => $request->input("bathrooms"),
            'kitchens' => $request->input("kitchens"),
            'garages' => $request->input("garages"),
            'built_year' => $request->input("built_year"),
            'amenities' => $request->input("amenities"),
            'status' => "available",
            'uuid' => $uuid,
        ]);

        return "updated succccc";

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $property = Property::findOrFail($id);
        $property->delete();

        return "deleted successfully";
    }
}
