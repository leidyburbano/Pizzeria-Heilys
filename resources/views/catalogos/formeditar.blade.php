@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de Edicion Catalogo</h1>

    <div class="container"> 
    <form action="{{route('editarCatalogo', $catalogo->Idcat )}}" method="POST">
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$catalogo->Idcat}}" name="nombrecat" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" disabled>
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$catalogo->Nombrecat}}" name="nombrecat" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div> 
        <br>
        <h3 style="margin-bottom: 50px;">Productos de Catalogo</h3>
        <div style="overflow-y: scroll;max-height: 200px;">
            <table class="table table-striped" >
                <thead >
                    <tr>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Id Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Valor </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $c)
                            <tr>
                                <td>
                                   <input class="form-check-input" type="checkbox" value="{{$c->Idpro}}" name="eliminar[]" id="eliminar">
                                </td>
                                <td> 
                                    <input style="width: 100px;" type="text" class="form-control"  value="{{$c->Idpro}}" disabled>
                                </td>
                                <td> 
                                    <input style="max-width: 100px;" type="text" class="form-control"  value="{{$c->Nombrepro}}" disabled>
                                </td>    
                                <td> 
                                    <input  type="text" min="1" max="100" class="form-control" value="{{$c->descripcionpro}}" aria-label="Username" aria-describedby="basic-addon1" disabled>
                                    
                                </td>
                                <td> 
                                    <input  type="hidden" value="{{$c->valor}}" class="form-control" aria-label="Username" aria-describedby="basic-addon1" >
                                    <input style="width: 100px;" type="text" class="form-control" value="{{$c->valor}}" disabled>
                                </td>
                                <td> 
                                    
                                </td>
                            </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <br>
        <h3 style="margin-bottom: 50px;">Agregar mas Productos</h3>
        <div class="container" style="overflow-y: scroll;max-height: 200px;margin-top:50px;">
            <table class="table table-striped">
                <thead >
                    <tr>
                    <th scope="col">Agregar</th>
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
                
        </div>
        <br><br>
        <button type="submit" class="btn btn-success" >Actualizar</button>
        <a href="{{url('catalogo/Lista')}}"  class="btn btn-danger">Cancelar</a>
        
        <br><br>

    </form>
</div>
@stop
