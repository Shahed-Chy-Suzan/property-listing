<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyEnquireController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
