<?php

use App\Http\Controllers\LogbookController;
use App\Http\Controllers\LogbookSettings\AircraftController;
use App\Http\Controllers\LogbookSettings\AircraftMakesController;
use App\Http\Controllers\LogbookSettings\AircraftModelsController;
use App\Http\Controllers\LogbookSettings\FlightCategoriesController;
use App\Http\Controllers\LogbookSettings\FlightTypesController;
use App\Http\Controllers\LogbookSettings\LogbookSettingsController;
use App\Livewire\Metar;
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

Route::prefix('/logbook/settings')->name('logbook.settings.')->group(function () {
    Route::get('/', [LogbookSettingsController::class, 'index'])->name('index');

    Route::resource('/aircraft', AircraftController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::resource('/makes', AircraftMakesController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::resource('/models', AircraftModelsController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);

    Route::resource('/categories', FlightCategoriesController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::resource('/types', FlightTypesController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
});

Route::resource('/logbook', LogbookController::class);

Route::prefix('/tools')->name('tools.')->group(function() {
    Route::view('/metar', 'tools.metar')->name('metar');
});

