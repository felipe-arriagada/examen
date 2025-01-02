<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ContactoRrss extends Model
{
    protected $table = 'contacto_rrss'; // Nombre de la tabla
    protected $fillable = ['instagram', 'telefono', 'is_enabled']; // 
}

