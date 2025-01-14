@php use Carbon\Carbon; @endphp

<div>
    <form wire:submit="getMetar">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="icao">ICAO</label>
                <input type="text"
                       id="icao"
                       name="icao"
                       class="form-control @error('icao') is-invalid @enderror"
                       wire:model="icao"
                />

                @error('icao')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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

    @foreach($metar as $data)
        @php
            $metar_time = Carbon::parse($data['receiptTime']);
        @endphp

        <div class="row">
            <div class="col-md-12 mb-4">
                <i class="fa-solid fa-plane fa-2xl"></i>
                <strong>{{ $data['icaoId'] . ', ' . $data['name'] }}</strong>
            </div>
            <div class="col-md-12 mb-4">
                <i class="fa-solid fa-calendar-days fa-2xl"></i>
                <strong>{{ $metar_time->format('M d, Y') }}</strong>
            </div>
            <div class="col-md-12 mb-4">
                <i class="fa-solid fa-clock fa-2xl"></i>
                <strong>{{ $metar_time->format('Hi\z') }}</strong>
            </div>
            <div class="col-md-12 mb-4">
                <i class="fa-solid fa-wind fa-2xl"></i>
                <strong>{{ $data['wdir'] . ' @ ' . $data['wspd'] }} {{ !is_null($data['wgst']) ? ' G ' . $data['wgst'] : '' }}</strong>
            </div>
            <div class="col-md-12 mb-4">
                <i class="fas fa-eye fa-2xl"></i>
                <strong>{{ $data['visib'] . ' sm' }}</strong>
            </div>
            <div class="col-md-12 mb-4">
                <i class="fa-solid fa-cloud fa-2xl"></i>
                @if(!empty($data['clouds']))
                    @foreach($data['clouds'] as $cloud_data)
                        <strong>{{ $cloud_data['cover'] }} {{ !is_null($cloud_data['base']) ? $cloud_data['base'] : '' }}</strong>
                    @endforeach
                @else
                    <strong>CLR</strong>
                @endif
            </div>
            <div class="col-md-12 mb-4">
                <i class="fas fa-thermometer fa-2xl"></i>
                <strong>{{ $data['temp'] }} &deg; C</strong>
            </div>
            <div class="col-md-12 mb-4">
                <i class="fas fa-droplet fa-2xl"></i>
                <strong>{{ $data['dewp'] }} &deg; C</strong>
            </div>
            <div class="col-md-12 mb-4">
                <i class="fas fa-tachometer-alt fa-2xl"></i>
                <strong>{{ number_format((int)$data['altim'] / 33.8639, 2) . ' inHg' }}</strong>
            </div>
        </div>
    @endforeach
</div>
