<?php

        use Illuminate\Support\Facades\Route;
        use App\Http\Controllers\pizzaController;
        use App\Http\Controllers\clientesController;
        use App\Http\Controllers\productosController;
        use App\Http\Controllers\pedidosController;
        use App\Http\Controllers\facturaController;
        use App\Http\Controllers\catalogoController;
        use App\Http\Controllers\cartaController;


        /*
        |--------------------------------------------------------------------------
        | Web Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register web routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | contains the "web" middleware group. Now create something great!
        |
        */

        Route::get('/', function () {
            return view('auth.login');
        });


        Route::get('/Principal ', [pizzaController::class, 'showPrincipal']);


        Route::get('pizza/mision-vision ', [pizzaController::class, 'showMision']);
       
        Route::get('pizza/ubicación ', [pizzaController::class, 'showUbicacion']);
      
        Route::get('pizza/contacto', [pizzaController::class, 'showContactos']);


        Route::get('cliente/registrar ', [clientesController::class, 'showRegistrar']);
       
        Route::get('cliente/actualizar ', [clientesController::class, 'showActualizar']);
      
        Route::get('cliente/listar', [clientesController::class, 'showListar']);


        Route::get('productos/registrar ', [productosController::class, 'showRegistrarP']);
       
        Route::get('productos/actualizar ', [productosController::class, 'showActualizarP']);
      
        Route::get('productos/consultar', [productosController::class, 'showConsultarP']);
            
        Route::get('productos/listar ', [productosController::class, 'showListarP']);
      
        Route::get('productos/eliminar', [productosController::class, 'showEliminarP']);

        Route::get('productos/detalle ', [productosController::class, 'showDetalles']);
        

        Route::get('factura/registrar ', [facturaController::class, 'showRegistrar']);
       
        Route::get('factura/actualizar ', [facturaController::class, 'showActualizar']);
      
        Route::get('factura/eliminar', [facturaController::class, 'showEliminar']);
            
        Route::get('factura/listar ', [facturaController::class, 'showListar']);

      

        Route::get('catalogo/crear', [catalogoController::class, 'showCrear']);
        Route::post('catalogo/crear', [catalogoController::class, 'registrar']);
      
        Route::get('catalogo/eliminar', [catalogoController::class, 'showEliminar']);
            
        Route::get('catalogo/listar ', [catalogoController::class, 'showListar']) ->name('listar');


        Route::get('carta/pizza', [cartaController::class, 'showPizza']);
            
        Route::get('carta/lasagna ', [cartaController::class, 'showLasagna']);


        
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth'])->name('dashboard');

        require __DIR__.'/auth.php';
