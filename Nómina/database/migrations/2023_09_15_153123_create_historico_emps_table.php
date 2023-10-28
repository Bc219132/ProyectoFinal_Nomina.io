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
        Schema::create('historico_emps', function (Blueprint $table) {
            $table->id();
            $table->string('NombreCompleto');
            $table->string('Cedula');
            $table->string('FechaIngreso');
            $table->string('FechaEgreso');
            $table->string('Cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico_emp');
    }
};
