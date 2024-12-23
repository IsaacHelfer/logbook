<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAircraftMakesRequest;
use App\Http\Requests\UpdateAircraftMakesRequest;
use App\Http\Requests\UpdateAircraftRequest;
use App\Models\AircraftMakes;
use Illuminate\Http\Request;

class AircraftMakesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makes = AircraftMakes::all();

        return view('aircraft_manager.makes.create', compact(
            'makes'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAircraftMakesRequest $request)
    {
        $validated = $request->validated();

        try {
            AircraftMakes::create([
                'make' => $validated['make'],
            ]);

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft make added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was an error adding the aircraft make!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $make = AircraftMakes::findOrFail($id);

        return view('aircraft_manager.makes.edit', compact(
            'make',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAircraftMakesRequest $request, string $id)
    {
        $validated = $request->validated();

        $make = AircraftMakes::findOrFail($id);

        try {
            $make->update([
                'make' => $validated['make'],
            ]);

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft make edited successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was a problem editing the aircraft make!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $make = AircraftMakes::findOrFail($id);

            $make->delete();

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft make deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was an error deleting the aircraft make!');
        }
    }
}
