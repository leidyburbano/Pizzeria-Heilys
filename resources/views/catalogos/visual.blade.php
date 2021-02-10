@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Catalogo De </h1>
    <br>
    
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            @foreach($catalogo as $p)
                <div class="col-md-4">
                    <div class="card border-primary" style="width: 400px; height: 600px;" >
                        <img class="card-img-top" style="width: 397px;height: 350px;" src="{{url("/img/$p->fotopro")}}" >
                        <div class="card-header">
                            <h2 class="card-title">
                                ID: {{$p->Idpro}}</th>
                            </h2>
                            <h3>
                                Nombre: {{$p->Nombrepro}}
                            </h3> 
                        </div>
                        <div class="card-body scroll" >
                            <h5 class="card-title">Descripcion: {{$p->descripcionpro}}</h5>
                                                                               
                        </div>
                        <div class="card-footer bg-transparent" style="height: 90px;">
                            <h4 class="card-text">Precio: {{$p->valor}}</h4>
                            
                        </div> 
                    </div><br>

                </div>
                    
            @endforeach
            <a href="{{url('catalogo/Lista')}}"  class="btn btn-danger">Cancelar</a>        
        </div>
    </div>
    
    
    
@stop
