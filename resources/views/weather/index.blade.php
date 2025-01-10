@extends('layouts.app')

@section('content')
    <h1>Weather</h1>

    @php $metar = \Illuminate\Support\Facades\Artisan::call('get:metar KDMW')  @endphp

    {{ $metar }}
@endsection
