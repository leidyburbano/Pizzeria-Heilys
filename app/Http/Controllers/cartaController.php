<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartaController extends Controller
{
    //
    public function showPizza(){
        return view('carta.pizza');
    }
    
    public function showLasagna(){
        return view('carta.lasagna');
    }

}
