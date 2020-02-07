<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->bigInteger('persona_id')->unsigned();
            $table->bigInteger('afiliacion_id')->unsigned();
            $table->string('ocupacion',30);
           $table->string('descripcion',255);
            $table->date('fecha');
            
            $table->foreign('persona_id')->references('id')->on('persona')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('afiliacion_id')->references('id')->on('afiliacion')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
