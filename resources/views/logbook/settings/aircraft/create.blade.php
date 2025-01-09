@extends('layouts.app')

@section('content')
    <x:card>
        <x:card.header>
            <div class="col">
                <h1>Add Aircraft</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logbook.settings.index') }}">Logbook Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Aircraft</li>
                </ol>
            </nav>
        </x:card.header>

        <x:card.body>
            <form action="{{ route('logbook.settings.aircraft.store') }}" method="POST">
                @csrf

                <div class="row">
                    <x:input type="text" id="identifier" class="col-md-12 mb-3" required />

                    <x:input type="select" id="make" class="col-md-6 mb-3" default required>
                        @if(isset($makes))
                            @foreach($makes as $make)
                                <option value="{{ $make->getKey() }}">{{ $make->make }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:input type="select" id="model" class="col-md-6 mb-3" default required>
                        @if(isset($models))
                            @foreach($models as $model)
                                <option value="{{ $model->getKey() }}">{{ $model->model }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:form-submit route="logbook.settings.index" value="Add" />
                </div>
            </form>
        </x:card-body>
    </x:card>
@endsection
