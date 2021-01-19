<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos = [
            [
                'nombreProducto'=> 'Pizza Bechamel',
                'cantidadProducto' => 10,
                'precioProducto' => 13000,
                'categoria' => 1,
                'fotoProducto'=> '1.jpg',
            ],
    
            [
                'nombreProducto'=> 'Pizza Pollo BBQ',
                'cantidadProducto' => 18,
                'precioProducto' => 120000,
                'categoria' => 1,
                'fotoProducto'=> '2.jpg',
            ],

            [
                'nombreProducto'=> 'Pizza Hawaiana',
                'cantidadProducto' => 15,
                'precioProducto' => 12000,
                'categoria' => 1,
                'fotoProducto'=> '3.jpg',
            ],
            
            [
                'nombreProducto'=> 'Pizza Pollo Con Champiñones ',
                'cantidadProducto' => 18,
                'precioProducto' => 15000,
                'categoria' => 1,
                'fotoProducto'=> '4.jpg',
            ] ,

            [
                'nombreProducto'=> 'Lasagna Pollo',
                'cantidadProducto' => 5,
                'precioProducto' => 13000,
                'categoria' => 2,
                'fotoProducto'=> '5.jpg',
            ],
            [
                'nombreProducto'=> 'Lasagna Mixta',
                'cantidadProducto' => 6,
                'precioProducto' => 13000,
                'categoria' => 2,
                'fotoProducto'=> '6.jpg',
            ] 
        ];
        DB::table('productos')->insert($datos);


    }
}
