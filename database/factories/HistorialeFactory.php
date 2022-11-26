<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historiale>
 */
class HistorialeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cantidad' => $this->faker->numberBetween(1, 100),
            'id_bodega_origen' => $this->faker->numberBetween(1, 10),
            'id_bodega_destino' => $this->faker->numberBetween(1, 10),
            'id_inventario' => $this->faker->numberBetween(1, 30),
            'created_by' => $this->faker->numberBetween(1, 5),
            

    // protected $fillable = ['cantidad','id_bodega_origen','id_bodega_destino','created_by','updated_by','id_inventario'];

        ];
    }
}
