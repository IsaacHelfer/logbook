<x-modal :title="'Submit Entry'">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="aircraft">Aircraft</label>
            <select id="aircraft" class="form-control" required>
                <option value="">Select one</option>
                @if(isset($aircraft))
                    @foreach($aircraft as $ac)
                        <option value="{{ $ac->getKey() }}">{{ $ac->identifier . ' - ' . $ac->make->make . ' ' . $ac->model->model }}</option>
                        {{--         change 'make' column in aircraft_makes to name eventually, same for model               --}}
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</x-modal>
