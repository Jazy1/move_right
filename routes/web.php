<?php

use App\Http\Controllers\LandlordController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PropertyController;
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
//hello
Route::get("/", function(){
    return view("home");
})->name("public.home");

Route::get("/test", function(){
    return view("testing");
});

// Route::resource('landlords', LandlordController::class);

Route::prefix("landlords")->group(function(){
    
    Route::middleware(["AuthCheckLandlord"])->group(function(){
        Route::get('dashboard', [LandlordController::class, "dashboard"])->name("landlords.dashboard");
        Route::get('logout', [LandlordController::class, "logout"])->name("landlords.logout");

        Route::prefix("properties")->group(function(){
            Route::get("create", [PropertyController::class, "create"])->name("properties.create");
            Route::post("/", [PropertyController::class, "store"])->name("properties.store");
            Route::get('get-areas-by-city', [LocationController::class, 'getAreasByCity'])->name("properties.getAreasByCity");

        });
    });
    
    Route::post('/', [LandlordController::class, "store"])->name("landlords.store");
    
    Route::middleware(["AlreadyLoggedLandlord"])->group(function(){
        Route::post('login', [LandlordController::class, "login"])->name("landlords.login");
    });

});
