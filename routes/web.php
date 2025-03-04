<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class);

Route::get('/products', [ProductController::class, 'index']); 

Route::get('/products/create', [ProductController::class, 'create']);

Route::get('/products/{name}/categoria?}',[ProductController::class, 'show']);
    