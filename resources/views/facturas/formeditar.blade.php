@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
    <form action="{{route('editarFactura', $facturas->Idfac )}}" method="POST">
        @csrf
        <div class="container" style="margin-top: 50px;">
        <div class="input-group mb-3">
            <input type="hidden" class="form-control" name="id"  value="{{ $facturas->Idfac }}" aria-label="Username" aria-describedby="basic-addon1" >
            <input type="text" class="form-control"   value="{{ $facturas->Idfac }}" disabled> 
            <input type="hidden" class="form-control" name="fecha"  value="{{ $facturas->Fechafac }}" aria-label="Username" aria-describedby="basic-addon1" >
            <input type="text" class="form-control"   value='{{ $facturas->Fechafac }}' disabled>  
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="cliente">Cliente</label>   
                </div>
                <select class="form-control" id="cliente" name="cliente" required>
                    <option value="{{ $cli->id }}" selected="true">{{ $cli->Nombre }}</option>
                    @foreach($clientes as $c)
                        <option value="{{$c->id}}">{{$c->Nombre}}</option>
                    @endforeach
                </select>
                <div class="input-group-prepend">
                    <label class="input-group-text" for="usuario">Usuario</label>   
                </div>
                <select class="form-control" id="usuario" name="usuario" required>
                    <option value="{{ $datos->id }}" selected="true">{{ $datos->Nombre }}</option>
                    @foreach($usuarios as $c)
                        <option value="{{$c->id}}">{{$c->Nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="input-group mb-3">
            <H3 style="margin-top: 30px;">DETALLE</H3>
             
        </div>

        <div class="container" style="overflow-y: scroll;max-height: 300px;">
            <table class="table table-striped" >
                <thead >
                    <tr>
                    <th scope="col">Id Producto</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Valor Unitario</th>
                    <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $c)
                            <tr>
                                <td> 
                                    <input  type="hidden" value="{{$c->Idpro}}" class="form-control"  name="producto[]" id="producto" aria-label="Username" aria-describedby="basic-addon1" >
                                    <input style="width: 100px;" type="text" class="form-control"  value="{{$c->Idpro}}" disabled>
                                </td>
                                <td> 
                                    <input type="text" class="form-control"  value="{{$c->Nombrepro}}" disabled>
                                </td>    
                                <td> 
                                    <input style="max-width: 100px;" type="number" min="1" max="100" class="form-control" value="{{$c->cantidad}}" name="cant[]" id="cant" aria-label="Username" aria-describedby="basic-addon1" >
                                    
                                </td>
                                <td> 
                                    <input  type="hidden" value="{{$c->valor}}" class="form-control"  name="valor[]" id="valor" aria-label="Username" aria-describedby="basic-addon1" >
                                    <input style="width: 100px;" type="text" class="form-control" value="{{$c->valor}}" disabled>
                                </td>
                                <td> 
                                    <input style="width: 100px;" type="text" class="form-control"  value="{{$c->subtotal}}" disabled>
                                </td>
                            </tr>
                    @endforeach
                    
                </tbody>
            </table>
                </div>
                <div class="input-group mb-3">
                    <input style="width: 100px;" type="text" class="form-control" name="total" id="total" value="TOTAL COMPRA =>" disabled>
                    <input style="width: 100px;" type="text" class="form-control" name="total" id="total" value="{{$datos->Totalfac}}" disabled>
                </div>
                <br>
                <button type="submit" class="btn btn-success" >Actualizar</button>
                <a href="{{url('factura/Lista')}}"  class="btn btn-danger">Cancelar</a>
                
        </div>

    </form>
</div>
@stop
