@extends('layouts.app')

@props(['title'=>'Logbook Entries'])

@section('content')
    <div class="row align-items-center">
        <div class="col">
            <h1>{{ $title }}</h1>
        </div>
        <div class="col-auto text-end">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                <span>Create Entry</span>
            </a>
        </div>
    </div>

    @include('entries.create')

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Date</th>
                <th scope="col">Aircraft</th>
                <th scope="col">Category</th>
                <th scope="col">Time</th>
                <th scope="col">Type</th>
                <th scope="col">Time</th>
                <th scope="col">Day</th>
                <th scope="col">Night</th>
                <th scope="col">XC</th>
                <th scope="col">Instrument</th>
                <th scope="col">Sim Instrument</th>
                <th scope="col">Instrument Apps</th>
                <th scope="col">Day Landings</th>
                <th scope="col">Night Landings</th>
                <th scope="col">Total Duration</th>
                <th scope="col">Remarks</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($entries))
                @foreach($entries as $entry)
                    <tr>
                        <td>{{$entry->getKey()}}</td>
                        <td>{{$entry->date}}</td>
                        <td>{{$entry->aircraft->identifier}}</td>
                        <td>{{$entry->category->category}}</td>
                        <td>{{$entry->category_time}}</td>
                        <td>{{$entry->type->type}}</td>
                        <td>{{$entry->type_time}}</td>
                        <td>{{$entry->day_time}}</td>
                        <td>{{$entry->night_time}}</td>
                        <td>{{$entry->xc_time}}</td>
                        <td>{{$entry->actual_instrument}}</td>
                        <td>{{$entry->sim_instrument}}</td>
                        <td>{{$entry->num_instrument_app}}</td>
                        <td>{{$entry->day_landings}}</td>
                        <td>{{$entry->night_landings}}</td>
                        <td>{{$entry->total_duration}}</td>
                        <td>{{$entry->remarks}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
