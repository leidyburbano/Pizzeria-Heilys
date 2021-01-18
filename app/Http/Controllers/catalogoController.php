<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use App\Models\Categoria;

    class catalogoController extends Controller
    {

        
        public function showCrear(){
            return view('catalogo.crear'); 
        }
        public function showActualizar(){
            return view('catalogo.actualizar');
        }
        
        public function showListar(){
            // Consulta a traves de Modelos
            $categoria = Categoria::all();

            return view('catalogo.listar', ['categoria' => $categoria]);   
        }

        public function registrar(Request $request)
        {
            // Registro de una Categoria en la base de datos a traves del Modelo
            $category = new Categoria();
            $category->nombreCategoria = $request->input('nombreCat');
            $category->descripcion = $request->input('descripcionCat');
            $category->save();
            return redirect()->route('listar');
        }
    }
