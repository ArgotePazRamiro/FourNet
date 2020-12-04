<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Equipo', function (Blueprint $table) {
            $table->increments('idEquipos');
            $table->string('Nombre');
            $table->string('Usuario');
            $table->string('Contrasenia');
            $table->string('UsuarioPPPoE')->nullable();
            $table->string('ContraseniaPPPoE')->nullable();
            $table->string('SSID')->nullable();
            $table->string('PasswordSSID')->nullable();
            $table->string('Tipo')->nullable();
            $table->string('Estado')->nullable();
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
        Schema::dropIfExists('Equipo');
    }
}
