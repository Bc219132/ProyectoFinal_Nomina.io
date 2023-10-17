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
        Schema::create('datos_laborales', function (Blueprint $table) {
            $table->id();
            $table->string('TipoContrato');
            $table->foreignId('id_banco')
                  ->nullable()
                  ->constrained('bancos')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->string('NCuentaBancaria');
            $table->string('TipoCuenta');
            $table->string('FechaIngreso');
            $table->string('NivelAcademico');
            $table->string('FechaEgreso')->nullable();
            $table->string('Estatus')->nullable();
            $table->foreignId('id_cargo')
                  ->nullable()
                  ->constrained('cargos')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_gerencia')
                  ->nullable()
                  ->constrained('gerencias')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_personas')
                  ->nullable()
                  ->constrained('personas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
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
        Schema::dropIfExists('datos_laborales');
    }
};
