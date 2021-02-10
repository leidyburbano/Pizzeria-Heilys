@extends('master') 
@section('contenido')
    <div class="container">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://i.pinimg.com/originals/9a/b9/62/9ab9626a301c2bf1444893a69a1bfac7.jpg" alt="Los Angeles" style="max-height: 600px; width: 2000px;">
                    </div>
                    <div class="carousel-item">
                    <img src="https://i.pinimg.com/originals/cb/34/d5/cb34d5ebfa554871bf375fb590978955.jpg" alt="Chicago" style="max-height: 600px; width: 2000px;">
                    </div>
                    <div class="carousel-item">
                    <img src="https://animalgourmet.com/wp-content/uploads/2019/10/pizza-1317699_1920.jpg" alt="New York" style="max-height: 600px; width: 2000px;">
                    </div>
                </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anteriir</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </a>  
        
    </div>
 

@stop
