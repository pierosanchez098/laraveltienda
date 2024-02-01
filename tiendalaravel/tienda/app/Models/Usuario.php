<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; 

    protected $fillable = [
        'nick',
        'email',
        'nombre',
        'apellidos',
        'dni',
        'fecha_nacimiento',
        'contrasena',
        'rol',
    ];
    
}
