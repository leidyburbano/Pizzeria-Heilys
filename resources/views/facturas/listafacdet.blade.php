@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Factura</h1>
    <br>
    
    
    <div class="container" style="margin-top: 50px;">
        <div class="input-group mb-3">
            <input type="hidden" class="form-control" name="fac"  value="{{ $facturas->Idfac }}" aria-label="Username" aria-describedby="basic-addon1" >
            <input type="text" class="form-control"   value="{{ $facturas->Idfac }}" disabled> 
            <input type="text" class="form-control"   value='{{ $facturas->Fechafac }}' disabled>  
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="usuario" value="{{ $datos->Nombre }}" aria-label="Username" aria-describedby="basic-addon1" disabled> 
            <input type="text" class="form-control" name="cliente" value="{{ $cli->Nombre }}" aria-label="Username" aria-describedby="basic-addon1" disabled> 
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
                                    <input style="width: 100px;" type="text" class="form-control"  value="{{$c->Idpro}}" disabled>
                                </td>
                                <td> 
                                    <input type="text" class="form-control"  value="{{$c->Nombrepro}}" disabled>
                                </td>    
                                <td> 
                                    <input style="width: 100px;" type="text" class="form-control"  value="{{$c->cantidad}}" disabled>
                                </td>
                                <td> 
                                    <input style="width: 100px;" type="text" class="form-control"  value="{{$c->valor}}" disabled>
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
        
        <a href="{{route('eliminarFac', $facturas->Idfac)}}"  class="btn btn-danger" >Eliminar</a>
        <a href="{{url('factura/Lista')}}"  class="btn btn-success">Finalizar</a> 
        
</div>
    
@stop
