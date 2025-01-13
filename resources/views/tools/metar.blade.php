@extends('layouts.app')

@section('content')
    <h1>Metar</h1>

    @php $metar = \Illuminate\Support\Facades\Artisan::call('get:metar KDMW')  @endphp

    {{ $metar }}
@endsection
