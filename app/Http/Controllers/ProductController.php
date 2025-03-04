<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ // este metodo es para listar los productos
        return view('products.index');
    } 

    public function create(){ //formulario crear un producto
        return view('products.create');

    }

    public function show(){
        return view('products.show');
    } 
}
