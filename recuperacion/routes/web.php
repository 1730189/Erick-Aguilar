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

/////Contactos////////

//Route::get('/contactos', 'ContactosController@index');
//Route::get('/contactos/create', 'ContactosController@create');
Route::resource('contactos', 'ContactosController');

/////Productos////////
//Route::get('/productos', 'ProductosController.php');
Route::resource('productos', 'ProductosController');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
