<?php

// app/Models/InformacionBasica.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformacionBasica extends Model
{
    protected $table = 'informacion_basica'; // Nombre de la tabla
    protected $fillable = [
        'logo_url',
        'company_name',
        'description',
        'seo_keywords',
        'main_menu',
        'is_enabled'
    ];
    protected $casts = [
        'seo_keywords' => 'array',
        'main_menu' => 'array',
    ];
}
