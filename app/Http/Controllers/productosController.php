<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    //

    public function showRegistrarP(){
        return view('productos.registrar'); 
    }
    
    public function showActualizarP(){
        return view('productos.actualizar');
    }
    
    public function showConsultarP(){
        return view('productos.consultar');
    }

    public function showListarP(){
        return view('productos.listar'); 
    }

    public function showEliminarP(){
        return view('productos.eliminar');
    }

    public function showDetalles(){
        return view('productos.detalle');
    }
    
    
}
