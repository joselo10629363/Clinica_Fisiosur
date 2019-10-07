<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('concepto_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->string('monto_total',10);
            $table->string('descripcion',255);
            $table->timestamps();
            $table->foreign('concepto_id')->references('id')->on('concepto')->onDelete('cascade')->onUpdate('cascade');
              $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
             

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresos');
    }
}
