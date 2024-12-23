<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAircraftModelsRequest;
use App\Http\Requests\UpdateAircraftModelsRequest;
use App\Models\AircraftModels;
use Illuminate\Http\Request;

class AircraftModelsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = AircraftModels::all();

        return view('aircraft_manager.models.create', compact(
            'models'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAircraftModelsRequest $request)
    {
        $validated = $request->validated();

        try {
            AircraftModels::create([
                'model' => $validated['model'],
            ]);

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft model added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was an error adding the aircraft model!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = AircraftModels::findOrFail($id);

        return view('aircraft_manager.models.edit', compact(
            'model',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAircraftModelsRequest $request, string $id)
    {
        $validated = $request->validated();

        $model = AircraftModels::findOrFail($id);

        try {
            $model->update([
                'model' => $validated['model'],
            ]);

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft model edited successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was a problem editing the aircraft model!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $model = AircraftModels::findOrFail($id);

            $model->delete();

            return redirect()->route('aircraft_manager.index')->with('success', 'Aircraft model deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('aircraft_manager.index')->with('error', 'There was an error deleting the aircraft model!');
        }
    }
}
