<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function producto(){
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }
}
