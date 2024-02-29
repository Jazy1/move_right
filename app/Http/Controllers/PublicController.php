<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{

    function home() {
        $latestProperties = Property::latest()->take(3)->get();
        $bestProperties = DB::table('properties')->inRandomOrder()->limit(3)->get();

        return view("public.home", [
            "latestProperties" => $latestProperties,
            "bestProperties" => $bestProperties,
        ]);
    }




}
