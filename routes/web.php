<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SubcategoriaController;
use App\Models\Subcategorias;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

Route::get('/productos', [ProductoController::class,'producto'])->name('productos.index');

Route::get('/subcategorias', [SubcategoriaController::class,'subcategorias'])->name('subcategorias.index');
