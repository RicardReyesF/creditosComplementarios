<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitudes extends Model
{
    protected $fillable = [
        'alumnos_id',
        'actividades_id',
        'estado'
    ];
}
