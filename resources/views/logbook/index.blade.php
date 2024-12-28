@extends('layouts.app')

@props(['title'=>'Logbook'])

@section('content')
    <div class="col-md-12 mt-2">
        <div class="row align-items-center">
            <div class="col">
                <h1>{{ $title }}</h1>
            </div>
            <div class="col-auto text-end">
                <a href="{{ route('logbook.create') }}" class="btn btn-primary">
                    <span>Create Entry</span>
                </a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-striped mt-3">
            <thead>
            <tr>
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
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($entries))
                @foreach($entries as $entry)
                    <tr>
                        <td class="text-truncate">{{$entry->date}}</td>
                        <td>{{$entry->aircraft->identifier ?? ''}}</td>
                        <td>{{$entry->category->category ?? ''}}</td>
                        <td>{{$entry->category_time ?? ''}}</td>
                        <td>{{$entry->type->type ?? ''}}</td>
                        <td>{{$entry->type_time ?? ''}}</td>
                        <td>{{$entry->day_time ?? ''}}</td>
                        <td>{{$entry->night_time ?? ''}}</td>
                        <td>{{$entry->xc_time ?? ''}}</td>
                        <td>{{$entry->actual_instrument ?? ''}}</td>
                        <td>{{$entry->sim_instrument ?? ''}}</td>
                        <td>{{$entry->num_instrument_app ?? ''}}</td>
                        <td>{{$entry->day_landings ?? ''}}</td>
                        <td>{{$entry->night_landings ?? ''}}</td>
                        <td>{{$entry->total_duration ?? ''}}</td>
                        <td class="text-truncate">{{!empty($entry->remarks) ? $entry->remarks : 'N/A'}}</td>
                        <td>
                            <div class="d-flex justify-content-between gap-2">
                                <div>
                                    <x:action route="logbook.show" parameters="{{ $entry->getKey() }}" tooltip="Show">
                                        <i class="fa-solid fa-eye"></i>
                                    </x:action>
                                </div>
                                <div>
                                    <x:action route="logbook.edit" parameters="{{ $entry->getKey() }}" tooltip="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </x:action>
                                </div>
                                <div>
                                    <x:action action="{{ route('logbook.destroy', $entry->getKey()) }}" delete tooltip="Delete" />
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
