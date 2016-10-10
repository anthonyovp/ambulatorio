<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoEnfermedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_enfermedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('usuario_ini_id');
            $table->integer('usuario_act_id');
            $table->integer('usuario_eli_id');
            $table->string('estatus');
            $table->timestamps();
            $table->date('fecha_eli')->nullable();
           

            $table->foreign('usuario_ini_id')->references('id')->on('users');
            $table->foreign('usuario_act_id')->references('id')->on('users');
            $table->foreign('usuario_eli_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_enfermedades');
    }
}
