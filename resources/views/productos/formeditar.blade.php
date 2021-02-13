@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
    <form action="{{route('editarProducto', $producto->Idpro )}}" method="POST" >
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$producto->Nombrepro}}" name="nombrepro" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$producto->Descripcionpro}}" name="descripcionpro" placeholder="Descripción Del Producto" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>  
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$producto->valor}}" name="valorpro" placeholder="Valor Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>        <br><br> 
        <button type="submit" class="btn btn-success" >Actualizar</button>
        <a href="{{url('producto/Lista')}}"  class="btn btn-danger">Cancelar</a>
        <br><br>

    </form>
</div>
@stop
