@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
    <form action="{{route('agregarCatalogo', $catalogo->Idcat )}}" method="POST">
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$catalogo->Idcat}}" name="idcat" id="idcat" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" >
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$catalogo->Nombrecat}}" name="nombrecat" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div> 

        <div class="container" style="margin-top: 50px;">
            <table class="table table-striped">
                <thead >
                    <tr>
                    <th scope="col">Selecciona</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $j=0;
                @endphp
                    @foreach($productos as $c)
                            @foreach($item as $i)
                                @if($i->id_producto == $c->Idpro || $j == 1)
                                    @php
                                        $j=1;
                                    @endphp
                                @else
                                    @php
                                        $j=0;
                                    @endphp
                                @endif


                            @endforeach  
                            @if($j == 0)
                                <tr>
                                    <th scope="row"><input class="form-check-input" type="checkbox" value="{{$c->Idpro}}" name="producto[]" id="producto"></th>
                                    <td> {{$c->Idpro}}</td>
                                    <td> {{$c->Nombrepro}}</td>
                                    <td> {{$c->descripcionpro}}</td>
                                    <td> {{$c->valor}}</td>   
                                </tr>
                                
                            @endif   
                            @php
                                $j=0;
                            @endphp   
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <br><br>
        <button type="submit" class="btn btn-success" >Agregar</button>
        <a href="{{url('catalogo/Lista')}}"  class="btn btn-danger">Cancelar</a>
        
        <br><br>

    </form>
</div>
@stop
