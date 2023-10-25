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
            $table->string('SueldoMen_Bs')->nullable();
            $table->foreignId('id_datos_laborales')
                ->nullable()
                ->constrained('datos_laborales')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_asignaciones')
                ->nullable()
                ->constrained('asignaciones')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_deducciones')
                ->nullable()
                ->constrained('deducciones')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_dolars')
                ->nullable()
                ->constrained('dolars')
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
        Schema::dropIfExists('calculo_ad');
    }
};
