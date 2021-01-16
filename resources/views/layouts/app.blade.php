

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

            <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
            <style>
                h3{
                    font-family: 'Kaushan Script', cursive;
                }
            </style>


            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
        </head>
        <body class="font-sans antialiased">
            <div class="min-h-screen bg-gray-100">
                @include('layouts.navigation')

                <!-- barra navegacion -->
                <nav class="navbar navbar-dark bg-dark">
                    <!-- Navbar content -->
                    </nav>
                
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="{{url('/')}}">Hotel La Rivera</a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hotel
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
                                <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}">Mision y vision</a>
                                <a class="dropdown-item" href="{{url('/hotel/ubicación')}}">Ubicacion</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Servicios
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item"  href="{{url('/servicios/habitaciones')}}">habitaciones</a>
                                <a class="dropdown-item"  href="{{url('/servicios/eventos/{id}')}}">Eventos</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Clientes
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('clientes/visualizar')}}">Visualizar</a>
                            
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/reservas ')}}">Reservas <span class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/facturacion ')}}">Facturacion <span class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/contáctos ')}}">Contactos <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- fin barra navegacion -->


                <div class="container">
                    @yield('content')
                </div>
            </div>

            
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

        </body>
    </html>
