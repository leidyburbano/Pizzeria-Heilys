<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facturaController extends Controller
{
    //
    public function showGenerarF(){
        return view('factura.generar'); 
    }
    
    public function showListarF(){
        return view('factura.listar');
    }

}
