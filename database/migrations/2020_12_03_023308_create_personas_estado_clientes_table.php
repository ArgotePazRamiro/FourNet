<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasEstadoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PersonaEstadoCliente', function (Blueprint $table) {
            $table->increments('idPersonaEstadoCliente');
            $table->string('fecha_inicio');
            $table->string('fecha_fin')->nullable();
            $table->timestamps();

            $table->integer('persona_id')->unsigned()->nullable();
            $table->foreign('persona_id')->references('idPersona')->on('Persona')->onDelete('set null');
            $table->integer('estadocliente_id')->unsigned()->nullable();
            $table->foreign('estadocliente_id')->references('idEstadoCliente')->on('EstadoCliente')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PersonaEstadoCliente');
    }
}
