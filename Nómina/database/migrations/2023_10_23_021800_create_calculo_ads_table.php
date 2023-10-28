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
        Schema::create('calculo_ads', function (Blueprint $table) {
            $table->id();
            $table->string('Año')->nullable();
            $table->string('Mes')->nullable();
            $table->string('Periodo')->nullable();
            $table->string('CanFalta')->nullable();
            $table->string('SueldoMen_Bs')->nullable();
            $table->string('TotalAbonar')->nullable();
            $table->string('DiasTrabajados')->nullable();
            $table->string('Vacaciones')->nullable();
            $table->string('CestaTickes')->nullable();
            $table->string('Utilidades')->nullable();
            $table->string('TotalA')->nullable();
            $table->string('Ausencias')->nullable();
            $table->string('Sso')->nullable();
            $table->string('Rpe')->nullable();
            $table->string('Faov')->nullable();
            $table->string('TotalD')->nullable();
            $table->foreignId('id_datos_laborales')
                ->nullable()
                ->constrained('datos_laborales')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_historico_pagos')
                ->nullable()
                ->constrained('historico_pagos')
                ->cascadeOnUpdate()
                ->nullOnDelete(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calculo_ad');
    }
};
