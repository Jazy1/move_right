<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{

    function home() {
        $latestProperties = Property::latest()->take(3)->get();
        $bestProperties = Property::inRandomOrder()->limit(3)->get();
        

        return view("public.home", [
            "latestProperties" => $latestProperties,
            "bestProperties" => $bestProperties,
        ]);
    }

    function search(Request $request) {

        $dbQuery = Property::query();
    
        // keywords
        if ($request->filled('keywords')) {
            $keywords = $request->input('keywords');
            $dbQuery->where('title', 'like', '%' . $keywords . '%');
        }
        
        // type
        if ($request->filled('type')) {
            $type = $request->input('type');
            $dbQuery->where('type', $type);
        }

        // If both 'keywords' and 'type' parameters are not present, add random order
        if (!$request->filled('keywords') && !$request->filled('type')) {
            $dbQuery->inRandomOrder()->limit(10);
        }

        // price range
        if ($request->filled('price_range')) {
            $priceRange = $request->input('price_range');
            list($minPrice, $maxPrice) = $this->extractPriceRange($priceRange);

            $dbQuery->whereBetween('price', [$minPrice, $maxPrice]);
        }

        $properties = $dbQuery->get();

        return view('public.search', [
            'properties' => $properties,
        ]);

    }
    
    private function extractPriceRange($priceRange)
    {
        // Assuming that the price range format is like "$10,000 - $200,000"
        $cleanedRange = Str::of($priceRange)->replace(['£', ','], '');
        list($minPrice, $maxPrice) = explode('-', $cleanedRange);

        return [(int)$minPrice, (int)$maxPrice];
    }
    


}
