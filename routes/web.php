<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyEnquireController;
use App\Http\Controllers\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    // Home
    Route::get('/', [HomeController::class, 'home'])->name('home');
    // Property
    Route::get('/property/{id}', [PropertyController::class, 'singleProperty'])->name('single-property');
    Route::post('/property/enquire/{id}', [PropertyEnquireController::class,'enquire'])->name('enquireform');
    Route::get('/properties', [PropertyController::class, 'index'])->name('properties');
    // Page
    Route::get('/page/{slug}', [PageController::class, 'single'])->name('page');
});


Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::get('properties', [DashboardController::class,'properties'])->name('adminProperties');
    Route::get('properties/addnew', [DashboardController::class,'createProperty'])->name('createProperty');
    Route::get('properties/edit/{id}', [DashboardController::class, 'editProperty'])->name('editProperty');
    Route::put('properties/update/{id}', [DashboardController::class, 'updateProperty'])->name('updateProperty');
    Route::delete('properties/destroy/{id}', [DashboardController::class, 'destroyProperty'])->name('destroyProperty');
    Route::post('properties/store', [DashboardController::class, 'storeProperty'])->name('storeProperty');

    Route::get('properties/delete-media/{id}', [DashboardController::class, 'deleteMedia'])->name('deleteMedia');

    // Locations
    Route::get('locations', [LocationController::class, 'index'])->name('adminLocations');
    Route::get('locations/create', [LocationController::class, 'create'])->name('createLocation');
    Route::post('locations/create/new', [LocationController::class, 'store'])->name('storeLocation');
    Route::get('location/edit/{id}', [LocationController::class, 'edit'])->name('editLocation');
    Route::put('location/update/{id}', [LocationController::class, 'update'])->name('updateLocation');
    Route::delete('location/delete/{id}', [LocationController::class, 'destroy'])->name('deleteLocation');
});


require __DIR__.'/auth.php';
