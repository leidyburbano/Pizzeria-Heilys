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
    <br>
    <h1 class="text-center">Lista de productos</h1>
    <br>
    <div class="container" >
        <form class="d-flex" action="{{url('producto/buscar')}}" method="POST">
            @csrf
         <input style="margin-left: 1000px;" class="form-control me-2" type="text" id="consultaPro" name="consultaPro" placeholder="Buscar" aria-label="buscar" style="max-width: 500px;">
         <h1>  <button type="submit" class="btn btn-outline-success" >Buscar</button></h1>
        </form>
    </div>
    <div class="container bg-dark" style="margin-top: 50px;">
    <br>
        <div class="row">
     
            @foreach($productos as $p)
            
                <div class="col-md-4">
                    <div class="card border-primary" style="width: 400px; height: 600px;" >
                        <img class="card-img-top" style="width: 390px;height: 350px;"  src="{{url("/img/$p->fotopro")}}" >
                        <div class="card-header">
                            <h2 class="card-title">
                                ID: {{$p->Idpro}}</th>
                            </h2>
                            <h3>
                                Nombre: {{$p->Nombrepro}}
                            </h3> 
                        </div>
                        <div class="card-body scroll" >
                            <h5 class="card-title">Descripcion: {{$p->Descripcionpro}}</h5>
                                                                               
                        </div>
                        <div class="card-footer bg-transparent" style="height: 90px;">
                            <h4 class="card-text">Precio: {{$p->valor}}</h4>
                            <a href="{{route('editarPro', $p->Idpro)}}"  class="btn btn-success">Editar</a> 
                            <a href="{{route('eliminarpro', $p->Idpro)}}"  class="btn btn-danger" >Eliminar</a>
                        </div> 
                    </div><br>

                </div>
              
            @endforeach       
        </div>
    <br>
    </div>
</h1>


@stop
