<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/almacen', 'AlmacenController@index');
Route::get('/almacen/update', 'AlmacenController@update');

Route::get('/empleado', 'EmpleadoController@index');
Route::get('/empleado/update', 'EmpleadoController@update');

Route::get('/tienda', 'TiendaController@index');
Route::get('/tienda/update', 'TiendaController@update');