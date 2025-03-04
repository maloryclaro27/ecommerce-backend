<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ // este metodo es para listar los productos
        echo "LISTADO DE PRODUCTOS DE ECOMMERCE";
    } 

    public function create(){ //formulario crear un producto
        echo "FORMULARIO PARA CREAR UN PRODUCTO";

    }

    public function show($name, $categoria = ){ // mostrar un producto el detalle 
        if ($categoria == null){
            echo "EL PRODUCTO ES: $name";
        }else{
            echo "EL PRODUCTO ES $name, y su categoria es $categoria";
        }

    }
}
