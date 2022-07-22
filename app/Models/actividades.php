<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividades extends Model

{
    protected $primaryKey = 'id';
    protected $fillable = [
        'creditos','actividad','responsable','tipo','horas','fechaInicio','fechaTerminacion'
    ];

    public function alumnos()
    {
        return $this->belongsToMany(User::class,'solicitudes','actividades_id','alumnos_id','id','noControl')
        ->withPivot('estado');
    }

}
