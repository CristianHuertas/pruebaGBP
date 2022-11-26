<?php

namespace Database\Seeders;

use App\Models\Bodega;
use App\Models\Historiale;
use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(30)->create();
        $this->call([
            ProductosTableSeeder::class,

        ]);

        Usuario::factory(5)->create();
        Bodega::factory(10)->create();
        //Producto::factory(20)->create();
        Inventario::factory(30)->create();
        Historiale::factory(40)->create();
    }
}
