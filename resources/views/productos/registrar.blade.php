@extends('layouts.app')
@section('content')

 <div class=" container ">
 <h1>
 <br><br>
    
    <div class="container ">
    <div class="card-body">
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        
                        <legend class="text-center header"></legend>
                        <h1 class="display-4">Registrar Producto</h1>
                           
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <p>Ingrese Nombre Producto:</p>
                                <br>
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <p>Ingrese Cantidad de Productos:</p>
                                <br>
                                <input id="lname" name="name" type="text" placeholder="Cantidad" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                            <p>Ingrese Precio:</p>
                            <br>
                                <input id="email" name="email" type="text" placeholder="precio" class="form-control">
                            </div>
                        </div>

                        <div class="container bg-Light">
                        <h1 class="display-4"><label for="formFile" class="form-label">Sube La Foto </label></h1>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <br><br>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


</h1>



@endsection