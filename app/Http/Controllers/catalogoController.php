<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalogoController extends Controller
{
    //
    public function showCrear(){
        return view('catalogo.crear'); 
    }
    public function showActualizar(){
        return view('catalogo.actualizar');
    }
    
    public function showListar(){
        return view('catalogo.listar');
    }

}
