<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use App\Models\Entries;
use Dotenv\Parser\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // \App\Models\Entries::create(['date'=>date('Y-m-d'),'aircraft_id'=>1,'category_id'=>1,'category_time'=>3.0,'type_id'=>2,'type_time'=>3.0,'night_time'=>3.0,'xc_time'=>3.0,'night_landings'=>2,'total_duration'=>3.0,'remarks'=>'Night xc']);

        $entries = Entries::all();

        $aircraft = Aircraft::all();

        return view('entries.index', compact(
            'entries',
            'aircraft'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
