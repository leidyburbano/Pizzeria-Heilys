<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function formregistro(){
       
        return view('clientes.formregistro');
    }
    public function registrar(Request $request){
        $cliente = new Cliente();
        $cliente->id = $request->input('idcli');
        $cliente->Nombre = $request->input('nombrecli');
        $cliente->apellido = $request->input('apellidocli');
        $cliente->telefono = $request->input('telefonocli');
        $cliente->direccion = $request->input('direccioncli');
        $cliente->email = $request->input('emailcli');
        $cliente->save();
        return redirect('cliente/Lista');
    }
    public function listar(){
        $clientes = DB::table('cliente')
                    ->select('id','Nombre','apellido','telefono','direccion','email')
                    ->orderBy('id')
                    ->get();
        return view('clientes.listacli', ['clientes' => $clientes]);
        
    }
    public function buscar(Request $request){
        $nombre = $request->input('consultaCli');
        $clientes = Cliente::where('Nombre', 'like','%'.$nombre.'%')
        ->get(); 
        return view('clientes.listacli', ['clientes' => $clientes]);
    }
    public function formeditar($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.formeditar', compact('cliente'));
        
    }
    public function editar(Request $request, $id){
        $cliente = Cliente::findOrFail($id);

        $cliente->id = $request->input('idcli');
        $cliente->Nombre = $request->input('nombrecli');
        $cliente->apellido = $request->input('apellidocli');
        $cliente->telefono = $request->input('telefonocli');
        $cliente->direccion = $request->input('direccioncli');
        $cliente->email = $request->input('emailcli');
        $cliente->save();
        return redirect('cliente/Lista');
    }
    public function eliminar($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect('cliente/Lista');
        
    }
}
