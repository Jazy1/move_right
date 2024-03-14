<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    function rentContract(Request $request) {
        $property = Property::findOrFail($request->property_id);

        return view("public.contracts.rent", [
            "property" => $property,
            "buyer" => $request->buyer
        ]);
    }

    function rentCreateContract(Request $request) {
        return "bondu";
    }

    
    function sellContract(Request $request) {
        $property = Property::findOrFail($request->property_id);
        
        return view("public.contracts.sell", [
            "property" => $property,
            "buyer" => $request->buyer
        ]);
    }
    
    function sellCreateContract(Request $request) {
        
    }

}
