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
            $table->bigInteger('diagnostico_id')->unsigned();
           
            $table->string('fecha');
            $table->string('horario');
            $table->string('dia');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('diagnostico_id')->references('id')->on('diagnostico')->onDelete('cascade')->onUpdate('cascade');
            
            
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
