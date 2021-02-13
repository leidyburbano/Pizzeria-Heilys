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

    <h1 class="text-center">Lista de Clientes</h1>
    <br><br>
    <div class="container" style="background-color: #D7CCC8;">
        <form class="d-flex" action="{{url('cliente/buscar')}}" method="POST">
            @csrf
            <input style="margin-left: 1000px;" class="form-control me-2" type="search" id="consultaCli" name="consultaCli" placeholder="Buscar" aria-label="Search" style="max-width: 400px;">
            <button type="submit" class="btn btn-outline-success" >Buscar</button>
        </form>
    </div>
    <br>
    @if($clientes)
    <h5>  
        <div class="container"  style="background-color: #D7CCC8;" style="margin-top: 50px;">
            <table class="table table-striped">
                <thead >
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Email</th>
                    <th scope="col">Más</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $c)
                        <tr>
                        <th scope="row">{{$c->id}}</th>
                        <td> {{$c->Nombre}}</td>
                        <td> {{$c->apellido}}</td>
                        <td> {{$c->telefono}}</td>
                        <td> {{$c->direccion}}</td>
                        <td> {{$c->email}}</td>
                        <td> 
                            <a href="{{route('editarCli', $c->id)}}"  class="btn btn-success">Editar</a> 
                            <a href="{{route('eliminarCli', $c->id)}}"  class="btn btn-danger" >Eliminar</a>
                        </td>     
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </h5>  
    @else
        <div class="container">
            <h2>No Existe el producto que buscas</h2>
        </div>
    @endif

</div>  
<br><br><br> 
@stop
