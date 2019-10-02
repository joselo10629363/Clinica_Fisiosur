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
            $table->bigInteger('diagnostico_id')->unsigned();
            $table->bigInteger('tratamiento_id')->unsigned();
            $table->string('sesion',2);

           $table->string('observacion',255);
            $table->timestamps();
            
            $table->foreign('tratamiento_id')->references('id')->on('tratamientos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('evolucion');
    }
}
