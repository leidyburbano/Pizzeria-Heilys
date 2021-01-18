@extends('layouts.app')
@section('content')
 <div class=" container">
 <h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <img src="https://i.pinimg.com/originals/9a/b9/62/9ab9626a301c2bf1444893a69a1bfac7.jpg" alt="Los Angeles">
            </div>

            <div class="item">
            <img src="https://i.pinimg.com/originals/cb/34/d5/cb34d5ebfa554871bf375fb590978955.jpg" alt="Chicago">
            </div>

            <div class="item">
            <img src="https://animalgourmet.com/wp-content/uploads/2019/10/pizza-1317699_1920.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <br>
    </div>
   <footer class="bg-dark text-white text-center text-lg-start">
      <!-- Grid container -->
      <div class="container p-4 bg-Dark ">
          <!--Grid row-->
          <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">BIENVENIDOS A HEILY'S </h5>

              <p>
              Satisfacer a nuestros clientes. Innovar y crecer constantemente, 
              adaptándonos a los gustos de nuestros clientes,proporcionando una variedad de ofertas que 
              permita disfrutar de productos propios e innovadores, mantener la calidad y excelencia en nuestros 
              productos. 
              </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase"> Siguenos en nuestras Redes Sociales</h5>
              <br>
              <ul class="list-unstyled mb-0">
              <li>
                  <a href="#!" class="text-white"> Facebook</a>
              </li>
              <li>
                  <a href="#!" class="text-white">https://www.facebook.com/HeilyspizzeriaIpiales/menu</a>
              </li>
              <br>
              <li>
                  <a href="#!" class="text-white">WhatsApp</a>
              </li>
              <li>
                  <a href="#!" class="text-white">3147069070</a>
              </li>
              </ul>
          </div>
          <!--Grid column-->
          </div>
          <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.8)">
          Pizzeria Heilys @2021 
          <a class="text-white"> </a>
      </div>
      <!-- Copyright -->

  </footer> 
</h1>
@endsection