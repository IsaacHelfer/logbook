@extends('layouts.app')

@section('content')
    <h1>Metar</h1>

{{--    @php $metar = \Illuminate\Support\Facades\Artisan::call('get:metar KDMW')  @endphp--}}

{{--    {{ $metar }}--}}
    <form action="" method="GET">
        @csrf

        <x:input type="text" id="icao" label="ICAO" class="col-md-6 mb-3" />
    </form>
@endsection
