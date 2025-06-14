<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/mission-vision', function () {
    return view('mission');
})->name('mission');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');