<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductodetalleController;
use App\Http\Controllers\SubcategoriaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

Route::get('/subcategorias/{categorias}', [SubcategoriaController::class, 'mostrarSubcategorias'])->name('subcategorias');

Route::get('/productos/{subcategorias}', [ProductoController::class,'mostrarProductos'])->name('productos');

Route::get('/productodetalle/{productos}', [ProductodetalleController::class,'mostrarProductosDetalle'])->name('productodetalle');

