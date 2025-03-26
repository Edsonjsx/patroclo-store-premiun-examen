<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table= 'productos';

    protected $fillable = [
        'nombre',
        'descripciom',
        'especificaciones',
        'precio_dolares',
        'porcentaje_descuento',
        'stock',
        'imagen_url',
        'informacion_fabricante_url'
    ];

    public $timestamps = false;
}
