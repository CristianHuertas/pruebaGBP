<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bodega>
 */
class BodegaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->city,
            'id_responsable' => $this->faker->randomElement([1,2,3,4,5]),
            'created_by' => $this->faker->numberBetween(1, 5),
            
        ];
    }
}
