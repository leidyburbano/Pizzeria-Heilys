
@extends('layouts.app')
@section('content')

<div class=" container bg-warning">
    <h1>
    <br>
    <div class="container">
    <img src="https://putinbaycameopizza.com/wp-content/uploads/2020/05/cropped-pizza_header.jpg" >
    
        <div class="card-body">
    </div>
    
    <div class="jumbotron jumbotron-fluid">
  
        <div class=" container">
        <h1>
            <h1 class="display-4">&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;Listado de nuestros productos</h1>
            <br><br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Categoria</th>
                            <th scope="col">Descripción </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categoria as $c)
                    
                            <tr>
                            <td> {{ $c->id }} </td>
                            <td> {{ $c->nombreCategoria }} </td>
                            <td> {{ $c->descripcion }}</td>
                            </tr>
                        
                    @endforeach
                    </tbody>
                </table
               
            </h1>
            
    </div>
   
    </div>
    <br>
</div>
@endsection