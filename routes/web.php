<?php

use Illuminate\Support\Facades\Route;

//Ruta por defecto
// Route::get('/', function () {
//     return view('welcome');
// });

// Ruta simple 
 /*
Route::get('/', function(){
    return "Hola esto es una prueba simple de rutas";
});*/


//Ruta de contacto
/*
Route::get('contacto', function(){
    return "Hola desde la pagina de contacto";
});*/

//Ruta con parametro
/*Route::get('saludo/{nombre?}', function($nombre ="Invitado"){
    return "Saludos " . $nombre;
});*/

//Seccion de contactos + nombre en la ruta ->name
/*Route::get('contactame', function(){
    return "seccion de contactos";
})->name('contactos');
Route::get('/', function(){
    echo "<a href='".route('contactos')."'>Contactos</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 1</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 2</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 3</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 4</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 5</a><br>";
});*/

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::view('/contact', 'contact')->name('contact');
