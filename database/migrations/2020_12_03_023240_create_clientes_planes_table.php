<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesPlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ClientePlan', function (Blueprint $table) {
            $table->increments('idClientePlan');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->timestamps();

            $table->integer('persona_id')->unsigned()->nullable();
            $table->foreign('persona_id')->references('idPersona')->on('Persona')->onDelete('set null');
            $table->integer('planes_id')->unsigned()->nullable();
            $table->foreign('planes_id')->references('idPlanes')->on('Planes')->onDelete('set null');
            $table->integer('equipos_id')->unsigned()->nullable();
            $table->foreign('equipos_id')->references('idEquipos')->on('Equipo')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ClientePlan');
    }
}
