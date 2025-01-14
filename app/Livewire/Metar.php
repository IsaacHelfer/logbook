<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Metar extends Component
{
    #[Validate('required|min:1|max:4')]
    public $icao = '';

    public $metar = [];

    public function render()
    {
        return view('livewire.metar');
    }

    public function getMetar()
    {
        $this->validate();

        $response = Http::get('https://aviationweather.gov/api/data/metar', [
            'ids' => $this->icao,
            'format' => 'json',
            'taf' => true,
        ]);

        \Log::debug($response->json());

        if ($response->successful()) {
            $this->metar = $response->json();
        }
    }
}
