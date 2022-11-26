<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $producto= new Producto();
        $producto->nombre='Alimentos';
        $producto->descripcion='Alimentos no perecederos';
        $producto->save();


        $producto2= new Producto();
        $producto2->nombre='Limpieza';
        $producto2->descripcion='Implementos de limpieza';
        $producto2->save();

        $producto3= new Producto();
        $producto3->nombre='Electrodomesticos';
        $producto3->descripcion='Electrodomesticos para el hogar';
        $producto3->save();

        $producto4= new Producto();
        $producto4->nombre='Hogar';
        $producto4->descripcion='Articulos para el hogar';
        $producto4->save();

        $producto5= new Producto();
        $producto5->nombre='Ropa';
        $producto5->descripcion='Ropa para el hogar';
        $producto5->save();

        $producto6= new Producto();
        $producto6->nombre='Tecnologia';
        $producto6->descripcion='Tecnologia para el hogar';
        $producto6->save();


    }
}
