<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $fillable = [
        'descripcion', 'precio', 'categoria', 'origen', 'fecha_adquisicion', 'fecha_vencimiento', 'ubicacion'
    ];
}
