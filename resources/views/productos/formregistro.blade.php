@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
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
@stop
