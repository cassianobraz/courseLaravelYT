<?php

use Illuminate\Support\Facades\Route;


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/produtos', function () {
    return view('product');
});
Route::get('/', function () {
    return view('welcome');
});
