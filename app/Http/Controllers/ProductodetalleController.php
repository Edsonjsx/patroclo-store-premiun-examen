<?php

namespace App\Http\Controllers;

use App\Models\Productodetalle;
use Illuminate\Http\Request;

class ProductodetalleController extends Controller
{
    public function productodetalle(){
        $productodetalle = Productodetalle::all();
        return view('productosdetalle', compact('productosdetalle'));
    }

    public function mostrarProductosDetalle($id_producto)
    {
        $productodetalles = Productodetalle::where('id_producto', $id_producto)->get();
        return view('productodetalle', compact('productodetalles'));
    }

    
}
