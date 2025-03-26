<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function producto(){
        $productos = Productos::all();
        return view('productos', compact('productos'));
    }

    public function mostrarProductos($subcategoriaId)
    {
        $productos = Productos::where('id_subcategoria', $subcategoriaId)->get();
        return view('productos', compact('productos'));
    }

}
