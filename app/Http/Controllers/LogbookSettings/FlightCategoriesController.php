<?php

namespace App\Http\Controllers\LogbookSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFlightCategoriesRequest;
use App\Http\Requests\UpdateFlightCategoriesRequest;
use App\Models\AircraftMakes;
use App\Models\FlightCategories;
use Illuminate\Http\Request;

class FlightCategoriesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = FlightCategories::all();

        return view('logbook.settings.categories.create', compact(
            'categories'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlightCategoriesRequest $request)
    {
        $validated = $request->validated();

        try {
            FlightCategories::create([
                'category' => $validated['category'],
            ]);

            return redirect()->route('logbook.settings.index')->with('success', 'Flight category added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.settings.index')->with('error', 'There was an error adding the flight category!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = FlightCategories::findOrFail($id);

        return view('logbook.settings.categories.edit', compact(
            'category',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightCategoriesRequest $request, string $id)
    {
        $validated = $request->validated();

        $category = FlightCategories::findOrFail($id);

        try {
            $category->update([
                'category' => $validated['category'],
            ]);

            return redirect()->route('logbook.settings.index')->with('success', 'Flight category edited successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.settings.index')->with('error', 'There was a problem editing the flight category!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = FlightCategories::findOrFail($id);

            $category->delete();

            return redirect()->route('logbook.settings.index')->with('success', 'Flight category deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('logbook.settings.index')->with('error', 'There was an error deleting the flight category!');
        }
    }
}
