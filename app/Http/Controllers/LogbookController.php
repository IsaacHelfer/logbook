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

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Entries::all();

        return view('logbook.index', compact(
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

        return view('logbook.create', compact(
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

        try {

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

            return redirect()->route('logbook.index')->with('success', 'Entry added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.index')->with('error', 'There was an error creating the entry!');
        }
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

        return view('logbook.edit', compact(
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

        try {
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

            return redirect()->route('logbook.index')->with('success', 'Entry edited successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.index')->with('error', 'There was a problem editing the entry!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $entry = Entries::findOrFail($id);

            $entry->delete();

            return redirect()->route('logbook.index')->with('success', 'Entry deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.index')->with('error', 'There was an error deleting the entry!');
        }
    }
}
