<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContractController extends Controller
{
    function rentContract(Request $request) {
        $property = Property::findOrFail($request->property_id);

        return view("public.contracts.create_rent", [
            "property" => $property,
            "buyer" => $request->buyer
        ]);
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

    public function index(Request $request){
        $contracts =  Contract::where("buyer_id", $request->buyer->id)->get();

        return view("buyers.contracts.contracts", [
            "contracts" => $contracts
        ]);
    }

    function store(Request $request) {

        $uuid = Str::uuid()->toString();

        $contract = Contract::create([
            'landlord_id' => $request->input("landlord_id"),
            'buyer_id' => $request->input("buyer_id"),
            'property_id' => $request->input("property_id"),
            'list_in' => $request->input("list_in"),
            'from' => $request->input("from"),
            'to' => $request->input("to"),
            'landlord_signature' => null,
            'buyer_signature' => null,
            'uuid' => $uuid,
            'status' => "valid",
        ]);
        
        if ($request->hasFile("landlord_signature")) {
            $signatureFolder = 'signatures/' . $uuid;
            $file = $request->file('landlord_signature');
            $fileName = "landlord_signature_" . $file->getClientOriginalName();
            $path = $file->storeAs('public/' . $signatureFolder, $fileName);
            $contract->landlord_signature = $path;
            $contract->save();
        }

        if ($request->hasFile("buyer_signature")) {
            $signatureFolder = 'signatures/' . $uuid;
            $file = $request->file('buyer_signature');
            $fileName = "buyer_signature_" . $file->getClientOriginalName();
            $path = $file->storeAs('public/' . $signatureFolder, $fileName);
            $contract->buyer_signature = $path;
            $contract->save();
        }
        return redirect(route("buyers.contracts"))->with("success", "Contract Signed Successfully");
        return "Contract Created successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show($id){
        $contract = Contract::findOrFail($id);

        return view("public.contracts.rent", [
            "contract" => $contract,
        ]);
    }

    /**
     * Null&Void the contract
     */
    public function nullNvoid($id){
        $contract = Contract::findOrFail($id);
        $contract->update(['status' => "nullNvoid"]);

        return back()->with("success", "Status Updated Successfully");
    }
}
