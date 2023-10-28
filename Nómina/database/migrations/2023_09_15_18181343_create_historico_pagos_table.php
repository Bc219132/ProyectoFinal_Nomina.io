<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreCompleto');
            $table->string('Cedula');
            $table->string('SueldoBs');
            $table->string('Tasa$');
            $table->string('Fechapago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico_pago');
    }
};
