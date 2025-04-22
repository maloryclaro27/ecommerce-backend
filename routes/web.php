<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::prefix('/products')->controller(ProductController::class)->group(function(){
    Route::get('/index', 'index'); 
    Route::get('/create', 'create');
    Route::get('/show', 'show');
});

    
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/',[ HomeController::class, 'welcome']);
