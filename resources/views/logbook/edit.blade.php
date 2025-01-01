@extends('layouts.app')

@section('content')
    <x:card.index>
        <x:card.header>
            <div class="col">
                <h1>Edit Logbook Entry</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logbook.index') }}">Logbook</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Entry</li>
                </ol>
            </nav>
        </x:card.header>
        <x:card.body>
            <form action="{{ route('logbook.update', $entry->getKey()) }}" method="POST">
                @csrf

                @method('PUT')

                @php
                    $default_class = 'col-md-4 mb-3';
                    $number_class = 'number-input';
                @endphp

                <div class="row">
                    <x:input type="date"
                             id="date"
                             class="{{ $default_class }}"
                             value="{{ $entry->date }}"
                             required
                    />

                    <x:input type="select" id="aircraft" class="{{ $default_class }}" default required>
                        @if(isset($aircraft))
                            @foreach($aircraft as $ac)
                                <option value="{{ $ac->getKey() }}" @if($ac->getKey() === $entry->aircraft_id) selected @endif>{{ $ac->identifier . ' - ' . $ac->make->make . ' ' . $ac->model->model }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:input type="number"
                             id="total"
                             label="Total Duration"
                             class="{{ $default_class }}"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->total_duration ?? 0 }}"
                             step="any"
                             required
                    />

                    <x:input type="select" id="category" class="col-md-6 mb-3" default required>
                        @if(isset($categories))
                            @foreach($categories as $category)
                                <option value="{{ $category->getKey() }}" @if($category->getKey() === $entry->category_id) selected @endif>{{ $category->category }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:input type="number"
                             id="categoryTime"
                             label="Category Time"
                             class="col-md-6 mb-3"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->category_time ?? 0 }}"
                             step="any"
                             required
                    />

                    <x:input type="select" id="type" class="col-md-6 mb-3" default required>
                        @if(isset($types))
                            @foreach($types as $type)
                                <option value="{{ $type->getKey() }}" @if($type->getKey() === $entry->type_id) selected @endif>{{ $type->type }}</option>
                            @endforeach
                        @endif
                    </x:input>

                    <x:input type="number"
                             id="typeTime"
                             label="Type Time"
                             class="col-md-6 mb-3"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->type_time ?? 0 }}"
                             step="any"
                             required
                    />

                    <x:input type="number"
                             id="dayTime"
                             label="Day Time"
                             class="{{ $default_class }}"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->day_time ?? 0 }}"
                             step="any"
                    />

                    <x:input type="number"
                             id="nightTime"
                             label="Night Time"
                             class="{{ $default_class }}"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->night_time ?? 0 }}"
                             step="any"
                    />

                    <x:input type="number"
                             id="xcTime"
                             label="Cross Country Time"
                             class="{{ $default_class }}"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->xc_time ?? 0 }}"
                             step="any"
                    />

                    <x:input type="number"
                             id="actInstrumentTime"
                             label="Actual Instrument Time"
                             class="{{ $default_class }}"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->actual_instrument ?? 0 }}"
                             step="any"
                    />

                    <x:input type="number"
                             id="simInstrumentTime"
                             label="Simulated Instrument Time"
                             class="{{ $default_class }}"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->sim_instrument ?? 0 }}"
                             step="any"
                    />

                    <x:input type="number"
                             id="instrumentApps"
                             label="Instrument Approaches"
                             class="{{ $default_class }}"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->num_instrument_app ?? 0 }}"
                             step="any"
                    />

                    <x:input type="number"
                             id="dayLandings"
                             label="Day Landings"
                             class="col-md-6 mb-3"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->day_landings ?? 0 }}"
                             step="any"
                    />

                    <x:input type="number"
                             id="nightLandings"
                             label="Night Landings"
                             class="col-md-6 mb-3"
                             inputClass="{{ $number_class }}"
                             min="0"
                             value="{{ $entry->night_landings ?? 0 }}"
                             step="any"
                    />

                    <x:input type="textarea" id="remarks" class="col-md-12 mb-3" rows="10" cols="10">
                        {{ $entry->remarks ?? '' }}
                    </x:input>

                    <x:form-submit route="logbook.index" value="Save" />
                </div>
            </form>
        </x:card.body>
    </x:card.index>
@endsection
