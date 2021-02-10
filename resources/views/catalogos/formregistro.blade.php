@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro Catalogo</h1>

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
@stop
