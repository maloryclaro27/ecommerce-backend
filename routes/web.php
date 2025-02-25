<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    echo "LISTADO DE PRODUCTOS DE ECOMMERCE";
});

Route::get('/products/{name}', function ($name) {
    echo "El producto es: $name";
});

Route::get('/products/create', function ($name) {
    echo "El producto es: $name";
});



