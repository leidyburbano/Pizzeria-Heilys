<?php

namespace App\Http\Controllers\Facturas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Factura;
use App\Models\ItemCatalogo;
use App\Models\ItemFactura;
use Illuminate\Support\Facades\DB;

class FacturaController extends Controller
{
    public function formregistro(){
        $clientes = DB::table('Cliente')->get();
        
        $facturas = DB::table('factura')
        ->latest('Idfac', 'desc')
        ->first();
        $catalogo =DB::table('Producto')->get(); 

        if($facturas){
            $aux=$facturas->Idfac+1;
            return view('facturas.formregistro', compact('aux','catalogo', 'clientes'));
        }else{
            $aux=1;
            return view('facturas.formregistro', compact('aux','catalogo', 'clientes'));
        }        
    }
    public function registrar(Request $request){
        $factura = new Factura();
        $factura->Fechafac = $request->input('fecha');
        $tot=0.00;
        $factura->Totalfac =$tot ;
        $factura->id_usuario = $request->input('usuarioid');
        $factura->id_cliente = $request->input('cliente');
        $factura->save();
 

        $n = count($request->producto);
		$fac = DB::table('factura')
        ->latest('Idfac', 'desc')
        ->first();
        $cont=0;
        $suma=0;
		for($i = 0; $i < $n; $i++){

			$venta = array();
			$venta = new ItemFactura;
            $venta['id_factura'] = $fac->Idfac;
            $venta['id_producto'] = $request->producto[$i];
            
            $k = count($request->cant);
            for($j = 0; $j < $k; $j++){
                if($request->cant[$j] == NULL){
            
                }else{
                    $aux[$cont]=$request->valor[$j];
                    $cont1[$cont]=$request->cant[$j];
                    $cont++;
                    
                }

            }
            
            $venta['cantidad'] = $cont1[$i];
            $venta['subtotal'] = $cont1[$i]*$aux[$i]; 
            $suma+=$cont1[$i]*$aux[$i];
            $venta->save();
        }
        $factura = Factura::findOrFail($fac->Idfac);
        $factura->Totalfac = $suma;
        $factura->save();
        return redirect('factura/Lista');
    }
    public function listar(){
        
        $facturas = Factura::all(); 
        return view('facturas.listafac', compact('facturas'));
        
    }
    public function detalle(Request $request, $Idfac){
        $facturas = Factura::findOrFail($Idfac);

        $cli = Factura::join('cliente', 'id_cliente', '=', 'cliente.id')
        ->where('Idfac', 'like',$Idfac)
        ->first();

        $datos = Factura::join('itemfactura', 'Idfac', '=', 'id_factura')
        
        ->join('users', 'id_usuario', '=', 'users.id')
        ->where('Idfac', 'like',$Idfac)
        ->orderBy('Idfac')
        ->first(); 

        $items = ItemFactura::join('factura', 'Idfac', '=', 'id_factura')
        ->join('producto', 'Idpro', '=', 'id_producto')
        ->where('Idfac', 'like',$Idfac)
        ->orderBy('Idfac')
        ->get();

        return view('facturas.listafacdet', compact('facturas','cli','datos','items'));
        
    }
    public function buscar(Request $request){
        $nombre = $request->input('consultaCat');
        $catalogos = Catalogo::where('Nombrecat', 'like','%'.$nombre.'%')
        ->get(); 
        return view('catalogos.listacat', ['catalogos' => $catalogos]);
    }
    
    public function eliminar($Idfac){
        $item = ItemFactura::findOrFail($Idfac);
        $item->delete();
        $factura = Factura::findOrFail($Idfac);
        $factura->delete();
        
       
        return redirect('factura/Lista');
        
    }
}
