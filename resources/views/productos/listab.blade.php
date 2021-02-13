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
<div class="containerk">  
    <br>
    <h3 class="text-center">Lista de productos</h1>
    <br>
</div>
    <div class="container " >
        <form class="d-flex" action="{{url('producto/buscar')}}" method="POST">
             @csrf   
            <input style="margin-left: 1000px;" class="form-control me-2" type="search" id="consultaPro" name="consultaPro" placeholder="Buscar" aria-label="Search" style="max-width: 400px;">
            <button type="submit" class="btn btn-outline-success" >Buscar</button>
        </form>
    </div>
    <br>
    @isset($productos)
        <div class="container" style="margin-top: 50px;">
            <table class="table table-striped">
                <thead >
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Más</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $p)
                    
                        <tr>
                        <th scope="row">{{$p->Idpro}}</th>
                        <td> {{$p->Nombrepro}}</td>
                        <td> {{$p->Descripcionpro}}</td>
                        <td> {{$p->valor}}</td>
                        
                        <td> 
                            <a href=""  class="btn btn-success">Editar</a> 
                            <a href=""  class="btn btn-danger" >Eliminar</a>
                        </td>     
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="container">
            <h2>No Existe el producto que buscas</h2>
        </div>
    @endif

    
@stop
