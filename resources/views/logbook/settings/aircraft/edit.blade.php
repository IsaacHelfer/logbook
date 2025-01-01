@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <div class="card-header">
            <div class="col">
                <h1>Edit Aircraft</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logbook.settings.index') }}">Aircraft Manager</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Aircraft</li>
                </ol>
            </nav>
        </div>

        <div class="card-body">
            <form action="{{ route('logbook.settings.aircraft.update', $aircraft->getKey()) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="row">
                    <x:input type="text" id="identifier" class="col-md-12 mb-3" value="{{ $aircraft->identifier }}" required />

                    <x:input type="select" id="make" class="col-md-6 mb-3" default required>
                        @if(isset($makes))
                            @foreach($makes as $make)
                                <option value="{{ $make->getKey() }}" @if($make->getKey() === $aircraft->make_id) selected @endif>{{ $make->make }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:input type="select" id="model" class="col-md-6 mb-3" default required>
                        @if(isset($models))
                            @foreach($models as $model)
                                <option value="{{ $model->getKey() }}" @if($model->getKey() === $aircraft->model_id) selected @endif>{{ $model->model }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <div class="col-md-6 offset-md-6 text-end mt-3">
                        <a href="{{ route('logbook.settings.index') }}" class="btn btn-outline-secondary btn-md">Back</a>
                        <input type="submit" value="Save" class="btn btn-success ms-2 btn-md" />
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
