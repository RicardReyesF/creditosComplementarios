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
        Schema::create('reporte_models', function (Blueprint $table) {
            $table->id();
            $table->integer('no_ctrl');
            $table->string('nombre');
            $table->integer('semestre');
            $table->string('carrera');
            $table->string('materia');
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
        Schema::dropIfExists('reporte_models');
    }
};
