@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
    <form action="{{url('usuario/registro')}}" method="POST" >
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="idusu" id="idusu" placeholder="Identificación" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="nombreusu" id="nombreusu" placeholder="Nombre Del Usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>  
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="apellidousu" id="apellidousu" placeholder="Apellido Del Usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="number" class="form-control" name="telefonousu" id="telefonousu" placeholder="Teléfono Del Usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="direccionusu" id="direccionusu" placeholder="Dirección Del Usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email Del Usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña Del Usuario" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">

            <input id="password_confirmation" class="form-control" type="password" placeholder="Confirmar Contraseña Del Usuario" name="password_confirmation" required />
        </div>
        
        <button type="submit" class="btn btn-success" >Registrar</button>
        <a href="{{url('usuario/Lista')}}"  class="btn btn-danger">Cancelar</a>
        <br><br>

    </form>
</div>
@stop
