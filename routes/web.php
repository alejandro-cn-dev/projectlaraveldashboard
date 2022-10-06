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
    return view('auth.login');
});

//Route::resource('articulos','App\Http\Controllers\ArticuloController');
Route::resource('productos','App\Http\Controllers\ProductoController');
Route::resource('empleados','App\Http\Controllers\EmpleadoController');
Route::resource('entradas','App\Http\Controllers\EntradaController');
Route::resource('salidas','App\Http\Controllers\SalidaController');
Route::resource('categorias','App\Http\Controllers\CategoriaController');
Route::resource('marcas','App\Http\Controllers\MarcaController');
Route::resource('almacens','App\Http\Controllers\AlmacenController');
Route::resource('home','App\Http\Controllers\HomeController');
Route::resource('inicio','App\Http\Controllers\IncioController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
        return view('dash.index');
        //return view('auth.login');
})->name('dash');
