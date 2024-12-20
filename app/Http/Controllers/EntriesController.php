<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntriesRequest;
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
        // \App\Models\Entries::create(['date'=>date('Y-m-d'),'aircraft_id'=>1,'category_id'=>1,'category_time'=>3.0,'type_id'=>2,'type_time'=>3.0,'night_time'=>3.0,'xc_time'=>3.0,'night_landings'=>2,'total_duration'=>3.0,'remarks'=>'Night xc']);

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
    public function store(Request $request)
    {
//        $validated = $request->validated();
        dump($request->all());

//        return redirect()->route('entries.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
