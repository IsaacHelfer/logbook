<?php

namespace App\Http\Controllers\LogbookSettings;

use App\Http\Controllers\Controller;
use App\Models\Aircraft;
use App\Models\AircraftMakes;
use App\Models\AircraftModels;
use App\Models\FlightCategories;
use App\Models\FlightTypes;

class LogbookSettingsController extends Controller
{
    public function index()
    {
        $aircraft = Aircraft::with(['make', 'model'])->get();

        $makes = AircraftMakes::all();

        $models = AircraftModels::all();

        $categories = FlightCategories::all();

        $types = FlightTypes::all();

        return view('logbook.settings.index', compact(
            'aircraft',
            'makes',
            'models',
            'categories',
            'types'
        ));
    }
}
