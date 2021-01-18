<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientesController extends Controller
{
    //

    public function showRegistrar(){
        return view('clientes.registrar'); 
    }
    public function showActualizar(){
        return view('clientes.actualizar');
    }
    
    public function showListar(){
        return view('clientes.listar');
    }
}
