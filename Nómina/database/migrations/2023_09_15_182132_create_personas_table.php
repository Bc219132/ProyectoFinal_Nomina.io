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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('PrimerNombre');
            $table->string('SegundoNombre')->nullable();
            $table->string('PrimerApellido');
            $table->string('SegundoApellido')->nullable();
            $table->string('Cedula')->unique();
            $table->string('RIF')->unique();
            $table->string('FechaNacimiento');
            $table->string('Nacionalidad');
            $table->foreignId('id_datos_laborales')
                  ->nullable()
                  ->constrained('datos_laborales')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_generos')
                  ->nullable()
                  ->constrained('generos')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
