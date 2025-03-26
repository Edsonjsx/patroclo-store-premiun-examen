<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table= 'subcategorias';

    protected $fillable = [
        'id_subcategoria',
        'nombre',
        'imagen_url'
    ];

    public $timestamps = false;
}
