@extends('layouts.app')

@props(['title'=>'Logbook Entries'])

@section('content')
    <div class="card p-4">
        <div class="card-header">
            <div class="col">
                <h1>Create Logbook Entry</h1>
            </div>
        </div>

        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="date" class="form-label">Date<x:required /></label>
                        <input type="date" class="form-control" id="date" value="{{ date('Y-m-d') }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="aircraft" class="form-label">Aircraft<x:required /></label>
                        <select id="aircraft" class="form-control" required>
                            <option value="0" selected>Select one</option>
                            @if(isset($aircraft))
                                @foreach($aircraft as $ac)
                                    <option value="{{ $ac->getKey() }}">{{ $ac->identifier . ' - ' . $ac->make->make . ' ' . $ac->model->model }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="category" class="form-label">Category<x:required /></label>
                        <select id="category" class="form-control" required>
                            <option value="0" selected>Select one</option>
                            @if(isset($categories))
                                @foreach($categories as $category)
                                    <option value="{{ $category->getKey() }}">{{ $category->category }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="categoryTime" class="form-label">Category Time<x:required /></label>
                        <input type="number" id="categoryTime" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">Flight Type<x:required /></label>
                        <select id="type" class="form-control" required>
                            <option value="0" selected>Select one</option>
                            @if(isset($types))
                                @foreach($types as $type)
                                    <option value="{{ $type->getKey() }}">{{ $type->type }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="typeTime" class="form-label">Type Time<x:required /></label>
                        <input type="number" id="typeTime" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="dayTime" class="form-label">Day Time</label>
                        <input type="number" id="dayTime" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="nightTime" class="form-label">Night Time</label>
                        <input type="number" id="nightTime" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="xcTime" class="form-label">Cross Country Time</label>
                        <input type="number" id="xcTime" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="actInstrumentTime" class="form-label">Actual Instrument Time</label>
                        <input type="number" id="actInstrumentTime" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="simInstrumentTime" class="form-label">Simulated Instrument Time</label>
                        <input type="number" id="simInstrumentTime" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="instrumentApps" class="form-label">Instrument Approaches</label>
                        <input type="number" id="instrumentApps" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="dayLandings" class="form-label">Day Landings</label>
                        <input type="number" id="dayLandings" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="nightLandings" class="form-label">Night Landings</label>
                        <input type="number" id="nightLandings" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="total" class="form-label">Total Duration<x:required /></label>
                        <input type="number" id="total" class="form-control time-input" min="0" placeholder="0" value="0" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <textarea id="remarks" class="form-control" rows="10" cols="10"></textarea>
                    </div>

                    <div class="col-md-6 offset-md-6 text-end mt-3">
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-md">Back</a>
                        <input type="submit" value="Create" class="btn btn-success ms-2 btn-md" />
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="module">
        $('.time-input').on('change', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
    </script>
@endsection
