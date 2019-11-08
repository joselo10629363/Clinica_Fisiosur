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
       
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('paciente_id')->unsigned()->nullable();
            $table->bigInteger('afiliacion_id')->unsigned()->nullable();
            $table->string('monto_total',10);
             $table->string('concepto',50);
            $table->string('saldo',10);
            $table->string('descripcion',255);
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('paciente_id')->references('id')->on('paciente')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('ingresos');
    }
}
