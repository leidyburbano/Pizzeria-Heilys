

<link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

                    <style>
                        h1{
                            font-family: 'Kaushan Script', cursive;
                        }
                    </style>

<img src="https://boston-pizzas.com/img/sites/boston-pizzas.com-banner.jpg?w=2000&h=200&fit=crop&1568633703">
<h1>  
    <!--inicio barra navegacion -->
        <nav class="navbar navbar-dark bg-dark">
                <!-- Navbar content -->
                </nav>
            
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{url('/')}}">Pizzeria Heilys</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('register')}}">Registrar <span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        </li>
                    
                    </ul>
                </div>
                </nav>

            <!-- fin barra navegacion --> 

    <div class="container">
   
    <img src="https://scontent.fclo7-1.fna.fbcdn.net/v/t1.0-9/95805761_118416429854260_5748332324286627840_o.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=AO5GOSZIcJsAX9eLf9z&_nc_ht=scontent.fclo7-1.fna&oh=05c754a05c32f396f1de8aa8d304e4f5&oe=60286A65" width="200" height="200">
                
        <!-- inicio tarjeta -->
        <div class="card" style="width: 69rem;">
        <div class="card-body">
                        
            <h3 class="card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Iniciar Sesion</h5>
            
            <p class="card-text ">
            
              <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                    
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                         <h1>   <x-label for="email" :value="__('Email')" /></h1>

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                          <h1>  <x-label for="password" :value="__('Contraseña')" /></h1>

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <h1>   <span class="ml-2 text-sm text-gray-600">{{ __('Recordar') }}</span> </h1>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                <h1>    {{ __('Recuperar Contraseña?') }}</h1>
                                </a>
                            @endif

                            <x-button class="ml-3">
                             <h1>   {{ __('Ingresar') }}</h1>
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
              </x-guest-layout>
            </p>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
        </div>
    </div>
    </div>
       <!--fin tarjeta-->
        <br>

  <br><br>
   
     <footer class="bg-Dark text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
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
