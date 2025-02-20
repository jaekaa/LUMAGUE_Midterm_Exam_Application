<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('welcome to Japanese Resto');
});

Route::get('/products', [
    ProductController::class, 'resto'
]);
