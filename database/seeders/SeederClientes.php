<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederClientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datosc = [
            [
                'DNI'=>'100501768',
                'nombres'=>'Alberto Pantoja',
                'genero'=>'M',
                'Domicilio'=>'Barrio Puenes',
                'Telefono'=>'7730809',
                'foto'=>'1.jpg',
            
            ],
            [
                'DNI'=>'12984678',
                'nombres'=>'Amanda Perez',
                'genero'=>'F',
                'Domicilio'=>'Barrio Floresta',
                'Telefono'=>'7735066',
                'foto'=>'2.jpg',
            ],
            [
                'DNI'=>'1085775908',
                'nombres'=>'Daniela Aza',
                'genero'=>'F',
                'Domicilio'=>'Barrio puenes',
                'Telefono'=>'7721313',
                'foto'=>'3.jpg',
            ],
            [
                'DNI'=>'1086139882',
                'nombres'=>'Paola Lopez',
                'genero'=>'F',
                'Domicilio'=>'Barrio mistares',
                'Telefono'=>'7254477',
                'foto'=>'4.jpg',
            ],
            [
                'DNI'=>'1006501933',
                'nombres'=>'Julian Castro ',
                'genero'=>'M',
                'Domicilio'=>'Barrio Limedec',
                'Telefono'=>'7251198',
                'foto'=>'5.jpg',
            ]
        ];
        DB::table('clientes')->insert($datosc);


    }
}
