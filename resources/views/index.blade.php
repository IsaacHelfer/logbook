@extends('layouts.app')

@section('content')
    <h1>Welcome to the Homepage</h1>

    <img src="https://drive.google.com/thumbnail?id=1kGWG68thK4UYQci7x98JBENsagLn8rGf" alt="..." class="rounded float-left">
    <img src="https://drive.google.com/thumbnail?id=1nFhKx3hcJgkbGq12FMm_rpfUMUtQSG_W" alt="..." class="rounded float-left">

    {{--  Remove before LIVE  --}}
    <div class="mt-3">
        <h4>TODO</h4>
        <ul class="list-group">
            <li class="list-group-item">Refactors on input component</li>
            <li class="list-group-item">Implementation of entry tags</li>
            <li class="list-group-item">Implementation of entry pictures</li>
            <li class="list-group-item">Implementation of metar tool</li>
            <li class="list-group-item">Implementation of dark mode</li>
        </ul>
    </div>
@endsection
