<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntriesRequest;
use App\Http\Requests\UpdateEntriesRequest;
use App\Models\Aircraft;
use App\Models\Entries;
use App\Models\FlightCategories;
use App\Models\FlightTypes;
use Dotenv\Parser\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Entries::all();

        return view('entries.index', compact(
            'entries'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aircraft = Aircraft::all();

        $categories = FlightCategories::all();

        $types = FlightTypes::all();

        return view('entries.create', compact(
            'aircraft',
            'categories',
            'types'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntriesRequest $request)
    {
        $validated = $request->validated();

        Entries::create([
            'date' => $validated['date'],
            'aircraft_id' => $validated['aircraft'],
            'category_id' => $validated['category'],
            'category_time' => $validated['categoryTime'],
            'type_id' => $validated['type'],
            'type_time' => $validated['typeTime'],
            'day_time' => $validated['dayTime'],
            'night_time' => $validated['nightTime'],
            'xc_time' => $validated['xcTime'],
            'actual_instrument' => $validated['actInstrumentTime'],
            'sim_instrument' => $validated['simInstrumentTime'],
            'num_instrument_app' => $validated['instrumentApps'],
            'day_landings' => $validated['dayLandings'],
            'night_landings' => $validated['nightLandings'],
            'total_duration' => $validated['total'],
            'remarks' => $validated['remarks'] ?? '',
        ]);

        return redirect()->route('entries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $entry = Entries::findOrFail($id);

        $aircraft = Aircraft::all();

        $categories = FlightCategories::all();

        $types = FlightTypes::all();

        return view('entries.edit', compact(
            'entry',
            'aircraft',
            'categories',
            'types'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntriesRequest $request, string $id)
    {
        $validated = $request->validated();

        $entry = Entries::findOrFail($id);

       $entry->update([
            'date' => $validated['date'],
            'aircraft_id' => $validated['aircraft'],
            'category_id' => $validated['category'],
            'category_time' => $validated['categoryTime'],
            'type_id' => $validated['type'],
            'type_time' => $validated['typeTime'],
            'day_time' => $validated['dayTime'],
            'night_time' => $validated['nightTime'],
            'xc_time' => $validated['xcTime'],
            'actual_instrument' => $validated['actInstrumentTime'],
            'sim_instrument' => $validated['simInstrumentTime'],
            'num_instrument_app' => $validated['instrumentApps'],
            'day_landings' => $validated['dayLandings'],
            'night_landings' => $validated['nightLandings'],
            'total_duration' => $validated['total'],
            'remarks' => $validated['remarks'] ?? '',
        ]);

        return redirect()->route('entries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
