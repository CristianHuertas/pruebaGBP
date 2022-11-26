<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventario>
 */
class InventarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_bodega' =>  $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
            'id_producto' =>  $this->faker->randomElement(['1', '2', '3', '4', '5', '6']),
            'cantidad' => $this->faker->numberBetween(1, 100),
            'created_by' => $this->faker->numberBetween(1, 5),

        ];
    }
}
