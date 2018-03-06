<?php

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

Route::get('/', 'PagesController@ventasPrincipal');

Route::get('/ventas2', 'PagesController@ventasPrincipal');

Route::get('/nuevaventa', 'PagesController@ventaNueva');

Route::resource('/clientes', 'ClienteController');

Route::resource('/articulos', 'ArticuloController');

Route::resource('/ventas', 'VentaController');

Route::get('/getclientes', 'ApiController@getAllClientes');

