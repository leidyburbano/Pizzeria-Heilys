@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
    <form action="{{route('editarUsuario', $usuario->id )}}" method="POST" >
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$usuario->id}}" name="idusu" id="idusu" placeholder="Identificación" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$usuario->Nombre}}" name="nombreusu" id="nombreusu" placeholder="Nombre Del usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>  
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$usuario->apellido}}" name="apellidousu" id="apellidousu" placeholder="Apellido Del usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="number" class="form-control" value="{{$usuario->telefono}}" name="telefonousu" id="telefonousu" placeholder="Teléfono Del usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$usuario->direccion}}" name="direccionusu" id="direccionusu" placeholder="Dirección Del usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="email" class="form-control" value="{{$usuario->email}}" name="emailusu" id="emailusu" placeholder="Email Del usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" value="{{$usuario->password}}" name="password" id="password" placeholder="Contraseña Del usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <br><br>
        <button type="submit" class="btn btn-success" >Actualizar</button>
        <a href="{{url('usuario/Lista')}}"  class="btn btn-danger">Cancelar</a>
        <br><br>

    </form>
</div>
@stop
