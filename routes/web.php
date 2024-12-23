<?php

use App\Http\Controllers\AircraftController;
use App\Http\Controllers\AircraftMakesController;
use App\Http\Controllers\EntriesController;
use App\Http\Controllers\FlightCategoriesController;
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

Route::view('/', 'index');

Route::resource('/entries', EntriesController::class);

Route::resource('/aircraft_manager', AircraftController::class)->only(['index']);

Route::prefix('aircraft_manager')->name('aircraft_manager.')->group(function () {
    Route::resource('/aircraft', AircraftController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::resource('/makes', AircraftMakesController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
});

Route::resource('flight_categories', FlightCategoriesController::class);
