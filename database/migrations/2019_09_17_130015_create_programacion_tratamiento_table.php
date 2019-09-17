<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacionTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacion_tratamiento', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('paciente_id')->unsigned();
            $table->bigInteger('diagnostico_id')->unsigned();
            $table->bigInteger('tratamiento_id')->unsigned();
            $table->string('fec_inicio');
            $table->string('horario');
            $table->string('frecuencia');
            $table->string('seciones');
            
            $table->timestamps();
            $table->foreign('paciente_id')->references('id')->on('paciente')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('diagnostico_id')->references('id')->on('diagnostico')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tratamiento_id')->references('id')->on('tratamientos')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programacion_tratamiento');
    }
}
