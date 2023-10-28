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
        Schema::create('deducciones', function (Blueprint $table) {
            $table->id();
            $table->string('AUSENCIA')->nullable();
            $table->string('SSO')->nullable();
            $table->string('RPE')->nullable();
            $table->string('FAOV')->nullable();
            $table->string('TotalD');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deducciones');
    }
};
