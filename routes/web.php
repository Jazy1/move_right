<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PublicController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PublicController::class, "home"])->name("public.home");
Route::get("/property/{id}", [PropertyController::class, "show"])->name("public.property");

Route::get("/test", function(){

    return view("testing", [
        "img" => "public/property_media/de192c7e-23bd-4e04-b255-a5736ac761d5/0_jameel.jpg"
    ]);
});

// Route::resource('landlords', LandlordController::class);

Route::prefix("landlords")->group(function(){
    
    Route::middleware(["AuthCheckLandlord"])->group(function(){
        Route::get('dashboard', [LandlordController::class, "dashboard"])->name("landlords.dashboard");
        Route::get('logout', [LandlordController::class, "logout"])->name("landlords.logout");

        Route::prefix("properties")->group(function(){
            Route::get("/", [PropertyController::class, "index"])->name("landlords.properties");

            Route::get("create", [PropertyController::class, "create"])->name("landlords.properties.create");
            Route::post("/", [PropertyController::class, "store"])->name("landlords.properties.store");
            Route::get("{property}/edit", [PropertyController::class, "edit"])->name("landlords.properties.edit");
            Route::put("{property}/edit", [PropertyController::class, "update"])->name("landlords.properties.update");
            Route::get("{property}/delete", [PropertyController::class, "destroy"])->name("landlords.properties.delete");
            Route::get('get-areas-by-city', [LocationController::class, 'getAreasByCity'])->name("landlords.properties.getAreasByCity");

        });
    });
    
    Route::post('/', [LandlordController::class, "store"])->name("landlords.store");
    
    Route::middleware(["AlreadyLoggedLandlord"])->group(function(){
        Route::post('login', [LandlordController::class, "login"])->name("landlords.login");
    });

});

Route::prefix("buyers")->group(function(){
    
    Route::middleware(["AuthCheckBuyer"])->group(function(){
        Route::get('dashboard', [BuyerController::class, "dashboard"])->name("buyers.dashboard");
        Route::get('logout', [BuyerController::class, "logout"])->name("buyers.logout");
        Route::get('/doggy', function(){
            return "soda";
        }); //for testing whether guards are working correctly or not

        // Route::prefix("properties")->group(function(){
        //     Route::get("/", [PropertyController::class, "index"])->name("landlords.properties");

        //     Route::get("create", [PropertyController::class, "create"])->name("landlords.properties.create");
        //     Route::post("/", [PropertyController::class, "store"])->name("landlords.properties.store");
        //     Route::get("{property}/edit", [PropertyController::class, "edit"])->name("landlords.properties.edit");
        //     Route::put("{property}/edit", [PropertyController::class, "update"])->name("landlords.properties.update");
        //     Route::get('get-areas-by-city', [LocationController::class, 'getAreasByCity'])->name("landlords.properties.getAreasByCity");

        // });
    });
    
    Route::post('/', [BuyerController::class, "store"])->name("buyers.store");
    
    Route::middleware(["AlreadyLoggedBuyer"])->group(function(){
        Route::post('login', [BuyerController::class, "login"])->name("buyers.login");
    });

});
