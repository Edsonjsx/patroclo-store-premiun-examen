<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    public function subcategorias(){
        $subcategorias = Subcategoria::all();
        return view('subcategorias', compact('subcategorias'));
    }
}
