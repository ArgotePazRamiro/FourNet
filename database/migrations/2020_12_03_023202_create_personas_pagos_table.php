<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PersonaPago', function (Blueprint $table) {
            $table->increments('idPersonaPago');
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->integer('persona_id')->unsigned()->nullable();
            $table->foreign('persona_id')->references('idPersona')->on('Persona')->onDelete('set null');
            $table->integer('pago_id')->unsigned()->nullable();
            $table->foreign('pago_id')->references('idPago')->on('Pago')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PersonaPago');
    }
}
