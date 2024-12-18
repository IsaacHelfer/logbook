@extends('layouts.app')

@section('content')
    <h1>Welcome to the Homepage</h1>
    <div class="row">
        <div class="col-sm-4">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                <span>Create Entry</span>
            </a>
        </div>
    </div>

    @include('entry-modal')
@endsection
