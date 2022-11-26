<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' =>  $this->faker->randomElement(['Alimentos', 'Bebidas', 'Limpieza', 'Electrodomesticos', 'Hogar', 'Ropa', 'Tecnologia']),
            'descripcion' => $this->faker->sentence(10),
            'created_by' => $this->faker->numberBetween(1, 5),

        ];
    }
}
