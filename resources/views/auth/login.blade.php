
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href=<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">

        <style>
            h1{
                font-family: 'Jomhuria', cursive;
                font-family: 'Playfair Display', serif;
            }
        </style>

    <img src="https://www.mandalaslifestyle.com/wp-content/uploads/2020/08/mandalaslifestyle-banner-arma-tu-caja-sorpresa.jpg">
    <h1>  
    
    <!--  <nav class="navbar navbar bg-danger" style="background-danger">
        Navbar content 
    </nav>-->

    <x-guest-layout>
        <x-auth-card>
      
            <x-slot name="logo">
                <a href="/">
                
                 <img src="https://scontent-bog1-1.xx.fbcdn.net/v/t1.0-9/145307825_248826253479943_4550552165460944078_o.jpg?_nc_cat=111&ccb=3&_nc_sid=09cbfe&_nc_eui2=AeEwbjmi5llS2oN92fV9CXRatRVzhyFrrzm1FXOHIWuvOQDqNl598_AZnDF1JZ4o7C0N03ESzHqsF_3EwbRYGF2a&_nc_ohc=mfxjWY23js0AX_YP141&_nc_ht=scontent-bog1-1.xx&oh=895cd7592433dcca01fe4b7d260f7429&oe=60498D28" width="150" height="150">
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                <h1><x-label for="email" :value="__('Email')" /></h1>

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <h1> <x-label for="password" :value="__('Contraseña')" /></h1>

                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <h1>   <span class="ml-2 text-sm text-gray-600">{{ __('Recordar') }}</span></h1>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            <h1>   {{ __('Olvidaste tu contraseña?') }}</h1>
                        </a>
                    @endif

                    <x-button class="ml-3 bg-danger">
                        <h1>  {{ __('Entrar') }} </h1>
                        <br>
                    </x-button>
                </div>
            </form>
        </x-auth-card>
        </x-guest-layout>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

