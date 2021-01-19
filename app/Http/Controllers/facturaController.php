<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facturaController extends Controller
{
    //
    public function showRegistrar(){
        return view('factura.registrar'); 
    }
    
    public function showActualizar(){
        return view('factura.actualizar');
    }

    public function showEliminar(){
        return view('factura.eliminar');
    }

    public function showListar(){
        return view('factura.listar');
    }

}
