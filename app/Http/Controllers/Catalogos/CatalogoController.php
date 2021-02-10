<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Producto;
use App\Models\ItemCatalogo;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller
{
    public function formregistro(){
       
        return view('catalogos.formregistro');
    }
    public function registrar(Request $request){
        $catalogo = new Catalogo();
        $catalogo->Nombrecat = $request->input('nombrecat');
       
        $catalogo->save();
        return redirect('catalogo/Lista');
    }
    public function listar(){
        $catalogos = DB::table('catalogo')
                    ->select('Idcat','Nombrecat')
                    ->orderBy('Idcat')
                    ->get();
        return view('catalogos.listacat', ['catalogos' => $catalogos]);
        
    }
    public function buscar(Request $request){
        $nombre = $request->input('consultaCat');
        $catalogos = Catalogo::where('Nombrecat', 'like','%'.$nombre.'%')
        ->get(); 
        return view('catalogos.listacat', ['catalogos' => $catalogos]);
    }
    public function formeditar($Idcat){
        $catalogo = Catalogo::findOrFail($Idcat);
        

        $items = ItemCatalogo::join('catalogo', 'id_catalogo', '=', 'Idcat')
        ->join('producto', 'Idpro', '=', 'id_producto')
        ->where('Idcat', 'like',$Idcat)
        ->orderBy('Idcat')
        ->get();

        $productos = DB::table('producto')->get();
        $item = ItemCatalogo::all();

        return view('catalogos.formeditar', compact('catalogo','items','productos','item'));
        
    }
    public function editar(Request $request, $Idcat){
        $catalogo = Catalogo::findOrFail($Idcat);
        $catalogo->Nombrecat = $request->input('nombrecat');
        $catalogo->save();

        if($request->eliminar == NULL){
            $n=0;
        }else{
            $n = count($request->eliminar);
        }
        
        $ventas = array();
		for($i = 0; $i < $n; $i++){
            $items = ItemCatalogo::where('id_producto', 'like',$request->eliminar[$i]);
            $items->delete();
            
        }

        $ventas=array();
        if($request->agregar == NULL){
            $k=0;
        }else{
            $k = count($request->agregar);
        }
        
        for($j = 0; $j < $k; $j++){            
			$venta = array();
			$venta = new ItemCatalogo;
            $venta['id_catalogo'] = $Idcat;
            $venta['id_producto'] = $request->agregar[$j];
            $venta->save();
        }
        return redirect('catalogo/Lista');
       
    }

    public function eliminar($Idcat){
        $item = ItemCatalogo::findOrFail($Idcat);
        $item->delete();;
        $catalogo = Catalogo::findOrFail($Idcat);
        $catalogo->delete();
        return redirect('catalogo/Lista');
        
    }

    public function formagregar($Idcat){
        $catalogo = Catalogo::findOrFail($Idcat);
        $productos = Producto::all();
        $item = ItemCatalogo::all();

       
    
        return view('catalogos.formagregar', compact('catalogo','productos','item'));
        
    }
    public function agregar(Request $request, $Idcat){
        $catalogo = Catalogo::findOrFail($Idcat);

        $n = count($request->producto);
		$ventas = array();

		for($i = 0; $i < $n; $i++){

			$venta = array();
			$venta = new ItemCatalogo;
            $venta['id_catalogo'] = $request->idcat;
            $venta['id_producto'] = $request->producto[$i];
            $venta->save();
        }
        return redirect('catalogo/Lista');
    }
    public function visual($Idcat){

        $producto = Catalogo::findOrFail($Idcat);
        $catalogo =Catalogo::join('itemcatalogo', 'Idcat', '=', 'id_catalogo')
        ->join('producto', 'id_producto', '=', 'Idpro')    
        ->where('Idcat', 'like',$Idcat)
        ->get(); 
        
        return view('catalogos.visual', ['catalogo' => $catalogo]);



    }
}
