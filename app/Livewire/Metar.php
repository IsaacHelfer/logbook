<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Artisan;
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
        $this->metar = Artisan::call('get:metar ' . $this->icao);

        return $this->metar;
    }
}
