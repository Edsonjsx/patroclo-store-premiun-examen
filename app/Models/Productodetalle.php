<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productodetalle extends Model
{
    protected $table= 'productodetalle';

    protected $fillable = [
        'id_producto',
        'detalle'
    ];

    public $timestamps = false;
    
}
