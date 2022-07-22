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

    public function alumno(){
        return $this->belongsTo(User::class,'alumnos_id','noControl');
    }

    public function actividad(){
        return $this->belongsTo(actividades::class,'actividades_id','id');
    }
}
