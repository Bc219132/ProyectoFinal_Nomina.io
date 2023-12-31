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
        Schema::create('detalles_cargos', function (Blueprint $table) {
            $table->id();
            $table->string('TipoCargo');
            $table->string('Sueldo');
            $table->foreignId('id_gerencia')
                  ->nullable()
                  ->constrained('gerencias')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_cestatikects')
                  ->nullable()
                  ->constrained('cestatikects')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_dolars')
                  ->nullable()
                  ->constrained('dolars')
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
        Schema::dropIfExists('cargo');
    }
};
