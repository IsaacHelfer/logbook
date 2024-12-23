<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAircraftRequest;
use App\Http\Requests\UpdateAircraftRequest;
use App\Models\Aircraft;
use App\Models\AircraftMakes;
use App\Models\AircraftModels;
use App\Models\Entries;
use Illuminate\Http\Request;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aircraft = Aircraft::all();

        $makes = AircraftMakes::all();

        $models = AircraftModels::all();

        return view('aircraft_manager.index', compact(
            'aircraft',
            'makes',
            'models'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makes = AircraftMakes::all();

        $models = AircraftModels::all();

        return view('aircraft_manager.aircraft.create', compact(
            'makes',
            'models'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAircraftRequest $request)
    {
        $validated = $request->validated();

        try {
            Aircraft::create([
                'make_id' => $validated['make'],
                'model_id' => $validated['model'],
                'identifier' => $validated['identifier'],
            ]);

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was an error creating the aircraft!');
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
        $aircraft = Aircraft::findOrFail($id);

        $makes = AircraftMakes::all();

        $models = AircraftModels::all();

        return view('aircraft_manager.aircraft.edit', compact(
            'aircraft',
            'makes',
            'models'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAircraftRequest $request, string $id)
    {
        $validated = $request->validated();

        $aircraft = Aircraft::findOrFail($id);

        try {
            $aircraft->update([
                'make_id' => $validated['make'],
                'model_id' => $validated['model'],
                'identifier' => $validated['identifier'],
            ]);

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft edited successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was a problem editing the aircraft!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $aircraft = Aircraft::findOrFail($id);

            $aircraft->delete();

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was an error deleting the aircraft!');
        }
    }
}
