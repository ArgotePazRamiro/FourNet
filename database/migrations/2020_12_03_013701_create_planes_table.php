<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Planes', function (Blueprint $table) {
            $table->increments('idPlanes');
            $table->string('Nombre');
            $table->string('Velocidad_subida');
            $table->string('Velocidad_bajada');
            $table->bigInteger('Precio');
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
        Schema::dropIfExists('Planes');
    }
}
