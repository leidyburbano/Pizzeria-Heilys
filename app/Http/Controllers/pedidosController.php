<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pedidosController extends Controller
{
    //
    public function showRegistrarPe(){
        return view('pedidos.registrar'); 
    }
    
    public function showActualizarPe(){
        return view('pedidos.actualizar');
    }
    
    public function showEliminarPe(){
        return view('pedidos.eliminar');
    }

    public function showFinalizarPe(){
        return view('pedidos.finalizar'); 
    }

}
