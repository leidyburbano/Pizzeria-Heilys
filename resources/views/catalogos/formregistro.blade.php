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
<div class="container bg-dark" >  
    <br><br>   
    <h1 class="text-white text-center">Formulario de registro Catalogo</h1>

    <div class="container"> 
    <form action="{{url('catalogo/registro')}}" method="POST">
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="nombrecat" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br><br>
        <button type="submit" class="btn btn-success" >Registrar</button>
        <a href="{{url('catalogo/Lista')}}"  class="btn btn-danger">Cancelar</a>
        <br><br>

    </form>
</div>
</div>
@stop
