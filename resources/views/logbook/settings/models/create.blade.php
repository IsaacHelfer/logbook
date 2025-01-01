@extends('layouts.app')

@section('content')
    <x:card>
        <x:card-header>
            <div class="col">
                <h1>Add Aircraft Model</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logbook.settings.index') }}">Logbook Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Aircraft Model</li>
                </ol>
            </nav>
        </x:card-header>

        <x:card-body>
            <form action="{{ route('logbook.settings.models.store') }}" method="POST">
                @csrf

                <div class="row">
                    <x:input type="text" id="model" class="col-md-12 mb-3" required />

                    <div class="col-md-6 offset-md-6 text-end mt-3">
                        <a href="{{ route('logbook.settings.index') }}" class="btn btn-outline-secondary btn-md">Back</a>
                        <input type="submit" value="Add" class="btn btn-success ms-2 btn-md" />
                    </div>
                </div>
            </form>
        </x:card-body>
    </x:card>
@endsection
