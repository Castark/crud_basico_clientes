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
    return view('welcome');
});

Route::get('/clientes/novo', 'App\Http\Controllers\ClientesController@create');
Route::post('/clientes/novo', 'App\Http\Controllers\ClientesController@store')->name('registrar_cliente');
Route::get('/cliente/ver/{id}', 'App\Http\Controllers\ClientesController@show');
Route::get('/cliente/editar/{id}', 'App\Http\Controllers\ClientesController@edit');
Route::post('/cliente/editar/{id}', 'App\Http\Controllers\ClientesController@update')->name('alterar_cliente');
Route::get('/cliente/excluir/{id}', 'App\Http\Controllers\ClientesController@delete');
Route::post('/cliente/excluir/{id}', 'App\Http\Controllers\ClientesController@destroy')->name('excluir_cliente');