<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'nombreCategoria' => 'pizza',
                'descripcion' => 'tipo de pizza',
            ],
            [
                'nombreCategoria' => 'lasagna',
                'descripcion' => 'tipo de lasagna',
            ],
              
        ];
        DB::table('categoria')->insert($datos);
    }
}
