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
<br><br>
<div class="container" style="background-color: #CFD8DC;">  
    
  
  
    <br>
    <h1 class="text-center">Lista de Facturas</h1>
    <br>
    
        <div class="container" style="margin-top: 50px;">
            <table class="table table-striped">
                <thead >
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Total</th>
                    <th scope="col" style="margin-left: 200px;"s>Más</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facturas as $c)
                        <tr>
                        <th scope="row">{{$c->Idfac}}</th>
                        <td> {{$c->Fechafac}}</td>
                        <td> {{$c->usuarios->Nombre}}</td>
                        <td> {{$c->clientes->Nombre}}</td>
                        <td> {{$c->Totalfac}}</td>
                        <td style="margin-left: 100px;"> 
                           
                            <a href="{{route('eliminarFac', $c->Idfac)}}"  class="btn btn-danger" >Eliminar</a>
                            <a href="{{route('detalleFac', $c->Idfac)}}"  class="btn btn-info" >Detalle</a>
                        </td>     
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
</div>
<br><br><br>    
@stop
