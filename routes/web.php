<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});


// mis tablas
Route::resource('bodegas', App\Http\Controllers\BodegaController::class)->middleware('auth');
Route::resource('estadofacts', App\Http\Controllers\EstadofactController::class)->middleware('auth');
Route::resource('estadoprods', App\Http\Controllers\EstadoprodController::class)->middleware('auth');
Route::resource('existencias', App\Http\Controllers\ExistenciaController::class)->middleware('auth');
Route::resource('facturas', App\Http\Controllers\FacturaController::class)->middleware('auth');
Route::resource('marcas', App\Http\Controllers\MarcaController::class)->middleware('auth');
Route::resource('muebles', App\Http\Controllers\MuebleController::class)->middleware('auth');
Route::resource('niveles', App\Http\Controllers\NiveleController::class)->middleware('auth');
Route::resource('posiciones', App\Http\Controllers\PosicioneController::class)->middleware('auth');
Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('productofacturas', App\Http\Controllers\ProductofacturaController::class)->middleware('auth');
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::resource('tiendas', App\Http\Controllers\TiendaController::class)->middleware('auth');
Route::resource('compras', App\Http\Controllers\CompraController::class)->middleware('auth');

Route::resource('ventadiarias', App\Http\Controllers\VentadiariaController::class)->middleware('auth');
Route::resource('reposicions', App\Http\Controllers\TiendaController::class)->middleware('auth');
Route::resource('facturaproducto', App\Http\Controllers\FacturaproductoController::class)->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
