<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

//Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');

//Route::get('/portfolio','PortfolioController')->name('portfolio');

Route::view('/contact', 'contact')->name('contact');
