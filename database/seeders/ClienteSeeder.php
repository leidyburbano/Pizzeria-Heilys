<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root=[
            //[
              //  'NombreComoEstaEnLaTabla'=>'ValorQueQuieroAsignar'
            // ],
            [   'id'=>'0000000',
                'Nombre'=>'root',
                'apellido'=>'root',
                'telefono'=>'0000',
                'direccion'=>'0000000',
                'email'=>'root@root.com',
            ]
            
           
        ];
        DB::table('cliente')->insert($root);
    }
}
