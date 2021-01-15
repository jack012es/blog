<?php

use Illuminate\Support\Facades\Route;


//Ruta por defecto
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return "Hola esto es una prueba simple de rutas";
});
