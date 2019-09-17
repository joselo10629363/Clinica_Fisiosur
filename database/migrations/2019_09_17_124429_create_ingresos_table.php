<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('paciente_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('detalle_id')->unsigned();
            $table->date('fecha');
            $table->string('importe');
            $table->string('descripcion',100);
           
            $table->timestamps();
            
            $table->foreign('paciente_id')->references('id')->on('paciente')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('diagnostico_id')->references('id')->on('diagnostico')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('detalle_id')->references('id')->on('detalle_ingreso')->onDelete('cascade')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}
