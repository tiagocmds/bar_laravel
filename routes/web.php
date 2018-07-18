<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::resource('produtos', 'ProdutoController');
Route::resource('cardapios', 'CardapioController');
Route::resource('mesas', 'MesaController');
Route::resource('garcoms', 'GarcomController');
Route::resource('comandas', 'ComandaController');
Route::resource('homes', 'HomeController');

