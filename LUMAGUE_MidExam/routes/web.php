<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome to Japanese Resto');
});

Route::get('/products', [
    ProductController::class, 'resto'
]);
