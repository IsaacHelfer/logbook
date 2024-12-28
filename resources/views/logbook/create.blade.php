@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <div class="card-header">
            <div class="col">
                <h1>Create Logbook Entry</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logbook.index') }}">Logbook</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Entry</li>
                </ol>
            </nav>
        </div>

        <div class="card-body">
            <form action="{{ route('logbook.store') }}" method="POST">
                @csrf

                @php
                    $default_class = 'col-md-4 mb-3';
                    $number_class = 'number-input';
                @endphp

                <div class="row">
                    <x:input type="date" id="date" class="{{ $default_class }}" value="{{ date('Y-m-d') }}" required />

                    <x:input type="select" id="aircraft" class="{{ $default_class }}" default required>
                        @if(isset($aircraft))
                            @foreach($aircraft as $ac)
                                <option value="{{ $ac->getKey() }}">{{ $ac->identifier . ' - ' . $ac->make->make . ' ' . $ac->model->model }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:input type="number" id="total" label="Total Duration" class="{{ $default_class }}" inputClass="{{ $number_class }}" min="0" value="0" step="any" required />

                    <x:input type="select" id="category" class="col-md-6 mb-3" default required>
                        @if(isset($categories))
                            @foreach($categories as $category)
                                <option value="{{ $category->getKey() }}">{{ $category->category }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:input type="number" id="categoryTime" label="Category Time" class="col-md-6 mb-3" inputClass="{{ $number_class }}" min="0" value="0" step="any" required />

                    <x:input type="select" id="type" class="col-md-6 mb-3" default required>
                        @if(isset($types))
                            @foreach($types as $type)
                                <option value="{{ $type->getKey() }}">{{ $type->type }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:input type="number" id="typeTime" label="Type Time" class="col-md-6 mb-3" inputClass="{{ $number_class }}" min="0" value="0" step="any" required />

                    <x:input type="number" id="dayTime" label="Day Time" class="{{ $default_class }}" inputClass="{{ $number_class }}" min="0" value="0" step="any" />

                    <x:input type="number" id="nightTime" label="Night Time" class="{{ $default_class }}" inputClass="{{ $number_class }}" min="0" value="0" step="any" />

                    <x:input type="number" id="xcTime" label="Cross Country Time" class="{{ $default_class }}" inputClass="{{ $number_class }}" min="0" value="0" step="any" />

                    <x:input type="number" id="actInstrumentTime" label="Actual Instrument Time" class="{{ $default_class }}" inputClass="{{ $number_class }}" min="0" value="0" step="any" />

                    <x:input type="number" id="simInstrumentTime" label="Simulated Instrument Time" class="{{ $default_class }}" inputClass="{{ $number_class }}" min="0" value="0" step="any" />

                    <x:input type="number" id="instrumentApps" label="Instrument Approaches" class="{{ $default_class }}" inputClass="{{ $number_class }}" min="0" value="0" step="any" />

                    <x:input type="number" id="dayLandings" label="Day Landings" class="col-md-6 mb-3" inputClass="{{ $number_class }}" min="0" value="0" step="any" />

                    <x:input type="number" id="nightLandings" label="Night Landings" class="col-md-6 mb-3" inputClass="{{ $number_class }}" min="0" value="0" step="any" />

                    <x:input type="textarea" id="remarks" class="col-md-12 mb-3" rows="10" cols="10" />

                    <div class="col-md-6 offset-md-6 text-end mt-3">
                        <a href="{{ route('logbook.index') }}" class="btn btn-outline-secondary btn-md">Back</a>
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