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

    <x:table class="mt-3">
        <x:table-head>
            <x:table-record>
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
            </x:table-record>
        </x:table-head>
        <x:table-body>
            @if(!empty($entries))
                @foreach($entries as $entry)
                    <x:table-record>
                        <x:table-data class="text-truncate">{{$entry->date}}</x:table-data>
                        <x:table-data>{{$entry->aircraft->identifier ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->category->category ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->category_time ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->type->type ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->type_time ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->day_time ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->night_time ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->xc_time ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->actual_instrument ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->sim_instrument ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->num_instrument_app ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->day_landings ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->night_landings ?? ''}}</x:table-data>
                        <x:table-data>{{$entry->total_duration ?? ''}}</x:table-data>
                        <x:table-data class="text-truncate">{{!empty($entry->remarks) ? $entry->remarks : 'N/A'}}</x:table-data>
                        <x:table-data>
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
                        </x:table-data>
                    </x:table-record>
                @endforeach
            @endif
        </x:table-body>
    </x:table>
@endsection
