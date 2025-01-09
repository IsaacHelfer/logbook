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

        $makes = AircraftMakes::select(['id', 'make'])->get();

        $models = AircraftModels::select(['id', 'model'])->get();

        $categories = FlightCategories::select(['id', 'category'])->get();

        $types = FlightTypes::select(['id', 'type'])->get();

        return view('logbook.settings.index', compact(
            'aircraft',
            'makes',
            'models',
            'categories',
            'types'
        ));
    }
}
