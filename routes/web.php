<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Productos\ProductoController;
use App\Http\Controllers\Clientes\ClienteController;
use App\Http\Controllers\Usuarios\UsuarioController;
use App\Http\Controllers\Catalogos\CatalogoController;
use App\Http\Controllers\Facturas\FacturaController;
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


Route::get('/dashboard',[HomeController::class, 'inicio'])->middleware('auth')->name('dashboard');;
require __DIR__.'/auth.php';



Route::get('producto/registro',[ProductoController::class, 'formregistro'])->middleware('auth');
Route::POST('producto/registro',[ProductoController::class, 'registrar'])->middleware('auth');

Route::get('producto/Lista',[ProductoController::class, 'listar'])->middleware('auth');
Route::POST('producto/buscar',[ProductoController::class, 'buscar'])->middleware('auth');

Route::get('producto/actualizar/{Idpro}', [ProductoController::class, 'formeditar'])->name('editarPro')->middleware('auth');
Route::post('producto/actualizar/{Idpro}', [ProductoController::class, 'editar'])->name('editarProducto')->middleware('auth');

Route::get('producto/eliminar/{Idpro}', [ProductoController::class, 'eliminar'])->name('eliminarpro');




Route::get('cliente/registro',[ClienteController::class, 'formregistro'])->middleware('auth');
Route::POST('cliente/registro',[ClienteController::class, 'registrar'])->middleware('auth');

Route::get('cliente/Lista',[ClienteController::class, 'listar'])->middleware('auth');
Route::POST('cliente/buscar',[ClienteController::class, 'buscar'])->middleware('auth');

Route::get('cliente/actualizar/{id}', [ClienteController::class, 'formeditar'])->name('editarCli')->middleware('auth');
Route::post('cliente/actualizar/{id}', [ClienteController::class, 'editar'])->name('editarCliente')->middleware('auth');

Route::get('cliente/eliminar/{id}', [ClienteController::class, 'eliminar'])->name('eliminarCli');



Route::get('usuario/registro',[UsuarioController::class, 'formregistro'])->middleware('auth');
Route::POST('usuario/registro',[UsuarioController::class, 'registrar'])->middleware('auth');

Route::get('usuario/Lista',[UsuarioController::class, 'listar'])->middleware('auth');
Route::POST('usuario/buscar',[UsuarioController::class, 'buscar'])->middleware('auth');

Route::get('usuario/actualizar/{id}', [UsuarioController::class, 'formeditar'])->name('editarUsu')->middleware('auth');
Route::post('usuario/actualizar/{id}', [UsuarioController::class, 'editar'])->name('editarUsuario')->middleware('auth');

Route::get('usuario/eliminar/{id}', [UsuarioController::class, 'eliminar'])->name('eliminarUsu');



Route::get('catalogo/registro',[CatalogoController::class, 'formregistro'])->middleware('auth');
Route::POST('catalogo/registro',[CatalogoController::class, 'registrar'])->middleware('auth');

Route::get('catalogo/Lista',[CatalogoController::class, 'listar'])->middleware('auth');
Route::POST('catalogo/buscar',[CatalogoController::class, 'buscar'])->middleware('auth');

Route::get('catalogo/actualizar/{Idcat}', [CatalogoController::class, 'formeditar'])->name('editarCat')->middleware('auth');
Route::post('catalogo/actualizar/{Idcat}', [CatalogoController::class, 'editar'])->name('editarCatalogo')->middleware('auth');

Route::get('catalogo/eliminar/{Idcat}', [CatalogoController::class, 'eliminar'])->name('eliminarCat');

Route::get('catalogo/agregar/{Idcat}', [CatalogoController::class, 'formagregar'])->name('agregarCat')->middleware('auth');
Route::POST('catalogo/agregar/{Idcat}',[CatalogoController::class, 'agregar'])->name('agregarCatalogo')->middleware('auth');

Route::get('catalogo/visualizar/{Idcat}',[CatalogoController::class, 'visual'])->name('visualizarCat')->middleware('auth');



Route::get('factura/registro',[FacturaController::class, 'formregistro'])->middleware('auth');
Route::POST('factura/registro',[FacturaController::class, 'registrar'])->middleware('auth');

Route::get('factura/Lista',[FacturaController::class, 'listar'])->middleware('auth');
Route::POST('factura/buscar',[FacturaController::class, 'buscar'])->middleware('auth');

Route::get('factura/actualizar/{Idfac}', [FacturaController::class, 'formeditar'])->name('editarFac')->middleware('auth');
Route::post('factura/actualizar/{Idfac}', [FacturaController::class, 'editar'])->name('editarFactura')->middleware('auth');

Route::get('factura/eliminar/{Idfac}', [FacturaController::class, 'eliminar'])->name('eliminarFac');

Route::get('factura/detalle/{Idfac}', [FacturaController::class, 'detalle'])->name('detalleFac');
