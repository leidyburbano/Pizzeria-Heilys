
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <style>
            h3{
                font-family: 'Kaushan Script', cursive;
            }
        </style>
  
    <h3>  
    <img src="https://static.depositphotos.com/storage/portfolio-cover/575/2493575.jpg?1593481462"width="1800" height="200">
   
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fd7e14;">
  
      <div class="container-fluid">     
      <img src="https://media1.giphy.com/media/LqI23cq78gtLfBC9Ub/giphy.gif" width="120" height="120">
       <p><strong><a class="navbar-brand" href="{{route ('dashboard')}}">Pizzeria Heily's&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></strong></p>
          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Productos
              </a>
              
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('producto/registro')}}">Registrar</a></li>
                <li><a class="dropdown-item" href="{{url('producto/Lista')}}">Listar</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clientes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('cliente/registro')}}">Registrar Cliente</a></li>
                <li><a class="dropdown-item" href="{{url('cliente/Lista')}}">Listar</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuarios
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('usuario/registro')}}">Registrar Usuario</a></li>
                <li><a class="dropdown-item" href="{{url('usuario/Lista')}}">Listar</a></li>
                
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Catalogo
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('catalogo/registro')}}">Registrar Catalogo</a></li>
                <li><a class="dropdown-item" href="{{url('catalogo/Lista')}}">Listar Catalogo</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Factura
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('factura/registro')}}">Registrar Factura</a></li>
                <li><a class="dropdown-item" href="{{url('factura/Lista')}}">Listar Facturas</a></li>
                
              </ul>
            </li>
            
            <div style="margin-left: 500px;">
            
            </div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->Nombre }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                
                </li>
               
      </h3>          
              </ul>
            </li>
        </div>
       
      </div>
     
    </nav>
    