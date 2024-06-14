<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/foods', function () {
    return view('foods');
})->name('foods');

Route::get('/drinks', function () {
    return view('drinks');
})->name('drinks');
