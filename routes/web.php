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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('transaccion','TransaccionController');

Route::get('consultar','TransaccionController@consultar');

Route::get('crearsubcripcion','TransaccionController@crearsubcripcion');

Route::get('cobrocontoquen','TransaccionController@cobrocontoquen');

Route::get('pagomixto','TransaccionController@pagomixto');

Route::get('pagorecurrente','TransaccionController@pagorecurrente');

