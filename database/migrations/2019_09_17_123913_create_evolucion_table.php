<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evolucion', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('paciente_id')->unsigned();
            $table->bigInteger('diagnostico_id')->unsigned();
            $table->date('fecha');
            $table->bigInteger('secion');

           $table->string('observacion',255);
            $table->timestamps();
            
            $table->foreign('paciente_id')->references('id')->on('paciente')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('diagnostico_id')->references('id')->on('diagnostico')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('evolucion');
    }
}
