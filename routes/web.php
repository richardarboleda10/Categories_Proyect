<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 //ruta hacia la pagina principal o main

Route::get('/', function () {
    return view('home');
});

//Ruta hacia una view especifica sin parametros

Route::get('/welcome', function () {
    return view('welcome');
});

// Ruta hacia una url con parametro

Route::get('/users/{id?}', function ($id = null) {
    return view('user_detail', ['id' => $id]);
});

// Otra forma de hacer una ruta con parametro es: Definimos la url, la vista y el alias con el cual llamamos la vista

Route::view('/users/{id?}', 'user_detail')->name('user.detail');

//Ruta con parametro requerido y parametro opcional

Route::get('/user/{tipoUser}/{id?}', function ($tipoUser, $id = '1') {
    return view('tipo_user', ['tipoUser' => $tipoUser, 'id' => $id]);
});

//RUTAS AL CONTROLLER>
//En vez de llamar una funcion annonima, llamamos al controlador y a la funcion que vamos a utilizar

Route::get('/post', [PostController::class, 'index']);

Route::resource('categories', CategoryController::class);

