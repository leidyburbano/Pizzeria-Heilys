<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function formregistro(){
       
        return view('productos.formregistro');
    }
    public function registrar(Request $request){
        $producto = new Producto();
        $producto->Nombrepro = $request->input('nombrepro');
        $producto->descripcionpro = $request->input('descripcionpro');
        $producto->fotopro = $request->input('fotopro');
        $producto->Valor = $request->input('valorpro');
       /*
        if (request()->hasFile('fotopro')) {
            $file = request()->file('fotopro');  
            
        }
        $from = $file;
        $to = 'C:\\xampp\htdocs\fin\public\img';
        exec('copy '.$from.' '.$to.' /Y');
        */
        $producto->save();
        return redirect('producto/Lista');
    }
    public function listar(){
        $productos = DB::table('producto')
                    ->select('Idpro','Nombrepro','Descripcionpro','fotopro','valor')
                    ->orderBy('Idpro')
                    ->get();
        return view('productos.listapro', ['productos' => $productos]);
        
    }
    public function buscar(Request $request){
        $nombre = $request->input('consultaPro');
        $productos = Producto::where('Nombrepro', 'like','%'.$nombre.'%')
        ->get(); 
        return view('productos.listapro', ['productos' => $productos]);
    }
    
    public function formeditar($Idpro){
        $producto = Producto::findOrFail($Idpro);
        return view('productos.formeditar', compact('producto'));
        
    }
    public function editar(Request $request, $Idpro){
        $producto = Producto::findOrFail($Idpro);
        $producto->Nombrepro = $request->input('nombrepro');
        $producto->Descripcionpro = $request->input('descripcionpro');
        $producto->Valor = $request->input('valorpro');
        $producto->save();
        return redirect('producto/Lista');
    }

    public function eliminar($Idpro){
        $producto = Producto::findOrFail($Idpro);
        $producto->delete();
        return redirect('producto/Lista');
        
    }
}
