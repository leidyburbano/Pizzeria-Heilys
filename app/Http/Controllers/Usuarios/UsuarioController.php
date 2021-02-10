<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function formregistro(){
       
        return view('usuarios.formregistro');
    }
    public function registrar(Request $request){

        $request->validate([
            'nombreusu' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:4',
        ]);
        $usuarios = new User();
        $usuarios->id = $request->input('idusu');
        $usuarios->Nombre = $request->input('nombreusu');
        $usuarios->apellido = $request->input('apellidousu');
        $usuarios->telefono = $request->input('telefonousu');
        $usuarios->direccion = $request->input('direccionusu');
        $usuarios->email = $request->input('email');
        $usuarios->password = Hash::make($request->password);
        $usuarios->save();
        return redirect('usuario/Lista');

        
    }
    public function listar(){
        $usuarios = DB::table('Users')
                    ->select('id','Nombre','apellido','telefono','direccion','email')
                    ->orderBy('id')
                    ->get();
        return view('usuarios.listausu', ['usuarios' => $usuarios]);
        
    }
    public function buscar(Request $request){
        $nombre = $request->input('consultaUsu');
        $usuarios = User::where('Nombre', 'like','%'.$nombre.'%')
        ->get(); 
        return view('usuarios.listausu', ['usuarios' => $usuarios]);
    }
    public function formeditar($id){
        $usuario = User::findOrFail($id);
        return view('usuarios.formeditar', compact('usuario'));
        
    }
    public function editar(Request $request, $id){
        $usuarios = User::findOrFail($id);

        $usuarios->id = $request->input('idusu');
        $usuarios->Nombre = $request->input('nombreusu');
        $usuarios->apellido = $request->input('apellidousu');
        $usuarios->telefono = $request->input('telefonousu');
        $usuarios->direccion = $request->input('direccionusu');
        $usuarios->email = $request->input('emailusu');
        $usuarios->password = Hash::make($request->password);
        $usuarios->save();
        return redirect('usuario/Lista');



    }
    public function eliminar($id){
        $usuarios = User::findOrFail($id);
        $usuarios->delete();
        return redirect('usuario/Lista');
        
    }
}
