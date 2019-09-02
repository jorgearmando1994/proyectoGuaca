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
Route::get('/usuario', function () {
    return view('usuario.create');
});
Route::get('/usuario/update', function () {
    return view('usuario.update');
});

Route::resource('productos', 'ProductoController');

Route::resource('clientes', 'ClienteController');

Route::resource('registros', 'RegistrosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
