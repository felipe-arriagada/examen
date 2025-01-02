<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuienesSomos extends Model
{
     protected $table = 'quienes_somos'; // Nombre de la tabla
    protected $fillable = ['contenido'];
}
