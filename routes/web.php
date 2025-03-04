<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class);

Route::prefix('/products')->controller(ProductController::class)->group(function(){
    Route::get('', 'index'); 
    Route::get('/create', 'create');
    Route::get('/show', 'show');
});

    