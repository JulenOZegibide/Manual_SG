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

Route::get('/', 'CircuitoController@index')->name('index');;

Route::get('tema/{id}', 'PaginaController@show')->name('index.show');;

Route::get('buscar', 'PaginaController@index')->name('index.buscar');;
