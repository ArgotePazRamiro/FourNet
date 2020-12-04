<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EmpleadoCargo', function (Blueprint $table) {
            $table->increments('idEmpleado_cargo');
            $table->string('Fecha_inicio');
            $table->string('Fecha_fin')->nullable();
            $table->timestamps();

            $table->integer('persona_id')->unsigned()->nullable();
            $table->foreign('persona_id')->references('idPersona')->on('Persona')->onDelete('set null');
            $table->integer('cargo_id')->unsigned()->nullable();
            $table->foreign('cargo_id')->references('idCargo')->on('Cargo')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EmpleadoCargo');
    }
}
