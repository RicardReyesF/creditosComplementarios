<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_alumnos', function (Blueprint $table) {
            $table->id();
            $table->integer('creditos');
            $table->string('actividad');
            $table->string('responsable');
            $table->string('tipo');
            $table->integer('horas');
            $table->string('alumno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_alumnos');
    }
};
