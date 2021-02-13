@extends('master')
@section('contenido') 

<link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <style>
            h3{
                font-family: 'Kaushan Script', cursive;
            }
        </style>
  
<h3>  
<br>
<div class="container" style="background-color: #D7CCC8;">   
    <br>    
    <h1 class="text-dark text-center">Registro de nuestros Clientes</h1>

    <div class="container"> 
    <form action="{{url('cliente/registro')}}" method="POST" >
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="idcli" id="idcli" placeholder="Identificación" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="nombrecli" id="nombrecli" placeholder="Nombre Del Cliente" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>  
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="apellidocli" id="apellidocli" placeholder="Apellido Del Cliente" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="number" class="form-control" name="telefonocli" id="telefonocli" placeholder="Teléfono Del Cliente" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="direccioncli" id="direccioncli" placeholder="Dirección Del Cliente" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="emailcli" id="emailcli" placeholder="Email Del Cliente" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        
        <button type="submit" class="btn btn-success" >Registrar</button>
        <a href="{{url('cliente/Lista')}}"  class="btn btn-danger">Cancelar</a>
        
        <br><br>

    </form>
 </div>
<h3>
</div>
@stop
