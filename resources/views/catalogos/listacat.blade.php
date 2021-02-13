@extends('master')
@section('contenido') 
<link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <style>
            h5{
                font-family: 'Kaushan Script', cursive;
            }
        </style>
  
<h5>  
<div class="container" >  
    
    <br><br>
  
    <h1 class="text-center">Lista de Catalogos</h1>
    <br>
    <div class="container bg-dark" >
        <form class="d-flex" action="{{url('catalogo/buscar')}}" method="POST">
            @csrf
            <input style="margin-left: 1000px;" class="form-control me-2" type="search" id="consultaCat" name="consultaCat" placeholder="Buscar" aria-label="Search" style="max-width: 400px;">
            <button type="submit" class="btn btn-outline-success" >Buscar</button>
        </form>
    </div>
    
    <div class="container" style="margin-top: 50px;">
        <table class="table table-striped">
            <thead >
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Más</th>
                </tr>
            </thead>
            <tbody>
                @foreach($catalogos as $c)
                    <tr>
                    <th scope="row" style="width: 200px;">{{$c->Idcat}}</th>
                    <td style="width: 650px;"> {{$c->Nombrecat}}</td>
                    <td> 
                        <a href="{{route('editarCat', $c->Idcat)}}"  class="btn btn-success">Editar Nombre</a> 
                        <a href="{{route('eliminarCat', $c->Idcat)}}"  class="btn btn-danger" >Eliminar</a>
                        <a href="{{route('agregarCat', $c->Idcat)}}"  class="btn btn-warning" >agregar</a>
                        <a href="{{route('visualizarCat', $c->Idcat)}}"  class="btn btn-info" >Visualizar</a>
                    </td>     
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </h5>
 <div>   
</div> 
<br><br><br>   
@stop
