<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pizzaController extends Controller
{
    //

    public function showMision(){
        return view('pizza.mision-vision'); 
    }
    public function showUbicacion(){
        return view('pizza.ubicacion');
    }
    
    public function showContactos(){
        return view('pizza.contacto');
    }

    public function showPrincipal(){
        return view('Principal');
    }


}
