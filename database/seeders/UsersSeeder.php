<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
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
            [   'id'=>'0000',
                'Nombre'=>'root',
                'apellido'=>'root',
                'telefono'=>'0000',
                'direccion'=>'0000',
                'email'=>'root@root.com',
                'password'=>'$2y$10$BtG1LYs6y95YfGc638GIuOPkoxZw7UlvoVgQOXvtDVgDcfsMjD/iu'
            ]
            
           
        ];
        DB::table('users')->insert($root);
    }
}
