<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('Servicios', function () {
    return view('service');
})->name('service');


Route::get('Nosotros', function () {
    return view('about');
})->name('about');


Route::get('Contacto', function () {
    return view('contact');
})->name('contact');
