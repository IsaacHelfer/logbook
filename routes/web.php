<?php

use App\Http\Controllers\AircraftController;
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

Route::resource('entries', EntriesController::class);
Route::resource('aircraft', AircraftController::class);
Route::resource('flight_categories', FlightCategoriesController::class);
