@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <div class="card-header">
            <div class="col">
                <h1>Create Aircraft</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('aircraft_manager.index') }}">Aircraft Manager</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Aircraft</li>
                </ol>
            </nav>
        </div>

        <div class="card-body">
            <form action="{{ route('aircraft_manager.store') }}" method="POST">
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

                    <div class="col-md-6 offset-md-6 text-end mt-3">
                        <a href="{{ route('aircraft_manager.index') }}" class="btn btn-outline-secondary btn-md">Back</a>
                        <input type="submit" value="Create" class="btn btn-success ms-2 btn-md" />
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="module">
        $('.number-input').on('change', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
    </script>
@endsection
