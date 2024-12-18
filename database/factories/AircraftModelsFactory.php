<?php

namespace Database\Factories;

use App\Models\AircraftModels;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AircraftModelsFactory extends Factory
{
    protected $model = AircraftModels::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => $this->faker->unique()->word,
        ];
    }
}
