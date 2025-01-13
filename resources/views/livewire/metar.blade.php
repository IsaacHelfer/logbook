<div>
{{--        TODO: Add errors       --}}
    <form wire:submit="getMetar">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="icao">ICAO</label>
                <input type="text"
                       id="icao"
                       name="icao"
                       class="form-control"
                       wire:model="icao"
                />
            </div>
            <div class="col-md-1 mb-3">
                <label for=""></label>
                <input type="submit"
                       value="Get"
                       class="btn btn-primary form-control col-md-6 mb-3"
                />
            </div>
        </div>
    </form>

    <span>{{ $metar }}</span>
</div>
