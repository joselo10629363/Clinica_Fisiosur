<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('id',10)->unsigned();
            $table->string('nombre',30);
            $table->string('apellido1',25);
            $table->string('apellido2',25);
            $table->string('cedula',10);
            $table->string('genero',2);
            $table->string('telefono',15);
            $table->string('domicilio',50);
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
        Schema::dropIfExists('persona');
    }
}
