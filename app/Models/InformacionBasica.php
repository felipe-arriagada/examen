<?php

<<<<<<< HEAD

=======
// app/Models/InformacionBasica.php
>>>>>>> 018e7a859f7fd3a09042aa1b24c8afa3cc5fe8a2
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD



=======
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
>>>>>>> 018e7a859f7fd3a09042aa1b24c8afa3cc5fe8a2

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
