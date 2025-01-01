@extends('layouts.app')

@section('content')
    <x:card>
        <x:card-header>
            <div class="col">
                <h1>Add Aircraft Make</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logbook.settings.index') }}">Logbook Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Aircraft Make</li>
                </ol>
            </nav>
        </x:card-header>

        <x:card-body>
            <form action="{{ route('logbook.settings.makes.store') }}" method="POST">
                @csrf

                <div class="row">
                    <x:input type="text" id="make" class="col-md-12 mb-3" required />

                    <x:form-submit route="logbook.settings.index" value="Add" />
                </div>
            </form>
        </x:card-body>
    </x:card>
@endsection
