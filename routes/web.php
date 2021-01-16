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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', ['as' => 'home', function(){
    return view('home');
}]);

Route::get('/contactame', ['as' => 'contactos', function(){
    return view('contactos');
}]);

Route::get('/saludo/{nombre?}', ['as' => 'saludos', function($nombre = "Usuario"){
    //return view('saludo', ['nombre' => $nombre]);
    //return view('saludo')->with(['nombre' => $nombre]);
    $html = "<h5>Contenido HTML</h5>";
    $script = "<script>alert('Problema XSS')</script>";

    $consolas = ['Play Station', 'XBox One', 'Wii U'];

    return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
}])->where('nombre', "[A-Za-z]+");