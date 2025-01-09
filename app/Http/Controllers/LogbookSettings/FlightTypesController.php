<?php

namespace App\Http\Controllers\LogbookSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFlightTypesRequest;
use App\Http\Requests\UpdateFlightTypesRequest;
use App\Models\FlightTypes;

class FlightTypesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = FlightTypes::all();

        return view('logbook.settings.types.create', compact(
            'types'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlightTypesRequest $request)
    {
        $validated = $request->validated();

        try {
            FlightTypes::create([
                'type' => $validated['type'],
            ]);

            return redirect()->route('logbook.settings.index')->with('success', 'Flight type added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.settings.index')->with('error', 'There was an error adding the flight type!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $type = FlightTypes::findOrFail($id);

        return view('logbook.settings.types.edit', compact(
            'type',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightTypesRequest $request, string $id)
    {
        $validated = $request->validated();

        $type = FlightTypes::findOrFail($id);

        try {
            $type->update([
                'type' => $validated['type'],
            ]);

            return redirect()->route('logbook.settings.index')->with('success', 'Flight type edited successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.settings.index')->with('error', 'There was a problem editing the flight type!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $type = FlightTypes::findOrFail($id);

            $type->delete();

            return redirect()->route('logbook.settings.index')->with('success', 'Flight type deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.settings.index')->with('error', 'There was an error deleting the flight type!');
        }
    }
}
