<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reporteModel extends Model
{
    protected $fillable = [
        'no_ctrl',
        'nombre',
        'semestre',
        'carrera',
        'materia',
    ];
}
