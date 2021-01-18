
@extends('layouts.app')
@section('content')
 <div class=" container">
 <h1>
 <br>
   

    <h1> Listado de nuestros productos</h1>
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
@endsection