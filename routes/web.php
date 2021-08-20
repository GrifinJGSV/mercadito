<?php

use Illuminate\Support\Facades\Route;
use Illuminate\controllers\ProductoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/*indice de mercadito(productos)*/
Route::get('/', 'App\Http\Controllers\ProductoController@indice')->name('productos.indice');
/*ruta para la creacion de productos */
Route::get('/nuevo','App\Http\Controllers\ProductoController@nuevo')->name('producto.nuevo');
/*ruta para el guardado de productos */
Route::post('/nuevo','App\Http\Controllers\ProductoController@guardar')->name('producto.guardar');
/*ruta para el editados de productos */
Route::get('/producto/{id}/editar','App\Http\Controllers\ProductoController@editar')
    ->name('producto.editar')->where('id','[0-9]+');
/*ruta para el guardar lo editado de productos */
Route::put('/producto/{id}/editar', 'App\Http\Controllers\ProductoController@actualizar')
    ->name('producto.actualizar')->where('id','[0-9]+');
/*ruta para el borrado de productos */
Route::delete('/producto/{id}/borrar','App\Http\Controllers\ProductoController@destruir')
    ->name('producto.borrar')->where('id','[0-9]+');


/*indice de proveedores*/
Route::get('/provedors', 'App\Http\Controllers\ProvedorsController@indice')->name('provedors.indice');
/*ruta para la creacion de provedores */
Route::get('/nuevo/provedor','App\Http\Controllers\ProvedorsController@nuevo')->name('provedor.nuevo');
/*ruta para el guardado de productos */
Route::post('/nuevo/provedor','App\Http\Controllers\ProvedorsController@guardar')->name('provedor.guardar');
/*ruta para el editados de productos */
Route::get('/provedor/{id}/editar','App\Http\Controllers\ProvedorsController@editar')
    ->name('provedors.editar')->where('id','[0-9]+');
/*ruta para el guardar lo editado de productos */
Route::put('/provedor/{id}/editar', 'App\Http\Controllers\ProvedorsController@actualizar')
    ->name('provedors.actualizar')->where('id','[0-9]+');
/*ruta para el borrado de productos */
Route::delete('/provedor/{id}/borrar','App\Http\Controllers\ProductoController@destruir')
    ->name('provedor.borrar')->where('id','[0-9]+');


/*indice de clintes*/
Route::get('/clients', 'App\Http\Controllers\ClientesController@indice')->name('clientes.indice');
/*ruta para la creacion de clientes*/
Route::get('/nuevo/cliente','App\Http\Controllers\ClientesController@nuevo')->name('cliente.nuevo');
/*ruta para el guardado de clientes */
Route::post('/nuevo/cliente','App\Http\Controllers\ClientesController@guardar')->name('cliente.guardar');
/*ruta para el editados de productos */
Route::get('/clientes/{id}/editar','App\Http\Controllers\ClientesController@editar')
    ->name('clientes.editar')->where('id','[0-9]+');
/*ruta para el guardar lo editado de productos */
Route::put('/clientes/{id}/editar', 'App\Http\Controllers\ClientesController@actualizar')
    ->name('clientes.actualizar')->where('id','[0-9]+');
/*ruta para el borrado de productos */
Route::delete('/cliente/{id}/borrar','App\Http\Controllers\ClientesController@destruir')
    ->name('cliente.borrar')->where('id','[0-9]+');

// Factura
//indice
Route::get('/factrura/indice', 'App\Http\Controllers\FacturaController@indice')->name('factura.indice');
/*ruta para la creacion de provedores */
Route::get('/factura/crear', 'App\Http\Controllers\FacturaController@nuevo')->name('factura.nuevo');

Route::post('/factura/guardar', 'App\Http\Controllers\FacturaController@guardar')->name('factura.guardar');


