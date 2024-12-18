<?php

namespace Database\Factories;

use App\Models\AircraftMakes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AircraftMakes>
 */
class AircraftMakesFactory extends Factory
{
    protected $model = AircraftMakes::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'make' => $this->faker->unique()->word,
        ];
    }
}
