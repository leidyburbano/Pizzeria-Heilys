@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
    <form action="{{url('factura/registro')}}" method="POST">
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
        <div class="input-group mb-3">
           
            <input type="hidden" class="form-control" name="fac"  value="{{ $aux }}" aria-label="Username" aria-describedby="basic-addon1" >
            <input type="text" class="form-control"   value="{{ $aux }}" disabled>   
           
        </div>
        <br>

        <div class="input-group mb-3">
            <input type="hidden" class="form-control" name="fecha" placeholder="Fecha De Venta" value='<?php echo date("Y-m-d");?>' aria-label="Username" aria-describedby="basic-addon1" >
            <input type="text" class="form-control"   value='<?php echo date("Y-m-d");?>' disabled>
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="hidden" class="form-control" name="usuarioid" value="{{ Auth::user()->id }}" aria-label="Username" aria-describedby="basic-addon1" > 
            <input type="text" class="form-control"  value="{{ Auth::user()->id }}" disabled>
            <input type="text" class="form-control" name="usuarionom" value="{{ Auth::user()->Nombre }}" aria-label="Username" aria-describedby="basic-addon1" disabled> 
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="cliente">Clientes</label>   
            </div>
            <select class="form-control" id="cliente" name="cliente" required>
                <option value="" >Selecione un Cliente</option>
                @foreach($clientes as $c)
                    <option value="{{$c->id}}">{{$c->Nombre}}</option>
                @endforeach
            </select>
        </div>
        <br>

        <div class="container" style="margin-top: 50px;overflow-y: scroll;max-height: 300px;">
            <table class="table table-striped" >
                <thead >
                    <tr>
                    <th scope="col">Selecciona</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
               
                    
                    @foreach($catalogo as $c)
                        
                            <tr>
                            <th scope="row"><input class="form-check-input" type="checkbox" value="{{$c->Idpro}}" name="producto[]" id="producto"></th>
                            <td> {{$c->Idpro}}</td>
                            <td> {{$c->Nombrepro}}</td>
                            <td> {{$c->descripcionpro}}</td>
                            <td> <input  type="hidden" value="{{$c->valor}}" class="form-control"  name="valor[]" id="valor" aria-label="Username" aria-describedby="basic-addon1" >
                                <input style="width: 100px;" type="text" class="form-control"  value="{{$c->valor}}" disabled>
                            </td>  
                            
                            <th>
                                
                                <input style="max-width: 100px;" type="number" min="1" max="100" class="form-control" name="cant[]" id="cant" aria-label="Username" aria-describedby="basic-addon1" >
                            </th>
                            </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>

        
               
        <br><br>
        <button type="submit" class="btn btn-success" >Registrar</button>
        <a href="{{url('factura/Lista')}}"  class="btn btn-danger">Cancelar</a> 
        
        <br><br>

    </form>
</div>
@stop
