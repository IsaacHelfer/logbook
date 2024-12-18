<?php

namespace Database\Factories;

use App\Models\Aircraft;
use App\Models\AircraftMakes;
use App\Models\AircraftModels;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aircraft>
 */
class AircraftFactory extends Factory
{
    protected $model = Aircraft::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'make_id' => AircraftMakes::factory(),
            'model_id' => AircraftModels::factory(),
            'identifier' => 'N'.$this->faker->numberBetween(100,9999).$this->faker->lexify('??'),
        ];
    }
}
