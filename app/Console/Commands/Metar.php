<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Metar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:metar {icao}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get METAR data.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://aviationweather.gov/api/data/metar', [
            'ids' => $this->argument('icao'),
        ]);

        if (!$response->successful()) {
            $this->fail('Something went wrong!');
        }

        echo $response->body();
    }
}
