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

Route::get('/', function(){
    echo "<a href=".route('contactos').">Contacto</a><br>";
    echo "<a href=".route('contactos').">Contacto</a><br>";
    echo "<a href=".route('contactos').">Contacto</a><br>";
    echo "<a href=".route('contactos').">Contacto</a><br>";
    echo "<a href=".route('contactos').">Contacto</a><br>";
    echo "<a href=".route('contactos').">Contacto</a><br>";
});

Route::get('/contactame', ['as' => 'contactos', function(){
    return "Contacto";
}]);

Route::get('/saludo/{nombre?}', function($nombre = "Usuario"){
    return "Hola $nombre";
})->where('nombre', "[A-Za-z]+");