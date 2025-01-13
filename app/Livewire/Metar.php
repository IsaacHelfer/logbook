<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Metar extends Component
{
    #[Validate('required')]
    public $icao = '';

    public $metar = '';

    public function render()
    {
        return view('livewire.metar');
    }

    public function getMetar()
    {
        $response = Http::get('https://aviationweather.gov/api/data/metar', [
            'ids' => $this->icao,
        ]);

        if ($response->successful()) {
            $this->metar = $response->body();
        }
    }
}
