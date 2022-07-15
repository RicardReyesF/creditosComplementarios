<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{
    protected $fillable = [ 'creditos','actividad','responsable','tipo','horas','fechaInicio','fechaTerminacion'];
}
