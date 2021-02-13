@extends('master')
@section('contenido') 

<link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <style>
            h1{
                font-family: 'Kaushan Script', cursive;
            }
        </style>
  
<h1>  
<div class="container bg-dark text-white" >  
    <br>
    <h1 class="text-white text-center">Formulario de registro producto</h1>
    <div class="container "> 
    <form action="{{url('producto/registro')}}" method="POST">
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="nombrepro" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="descripcionpro" placeholder="Descripción Del Producto" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>  

        <div class="input-group mb-3">
            <input type="file" class="form-control" id="fotopro" name="fotopro"  aria-describedby="basic-addon1" required> 
        </div>
        
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="valorpro" placeholder="Valor Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>        <br><br>
        <button type="submit" class="btn btn-success" >Registrar</button>
        <a href="{{url('producto/Lista')}}"  class="btn btn-danger">Cancelar</a>
        
        <br><br>

    </form>
 </div>
<h1>
</div>


@stop
