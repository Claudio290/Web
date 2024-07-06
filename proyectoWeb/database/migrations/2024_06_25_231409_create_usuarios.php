<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('rut')->primary();
            $table->string('nombre');
            $table->string('password');
            $table->boolean('activo')->default(true);
            $table->smallInteger('id_perfil');
            $table->foreign('id_perfil')->references('id')->on('perfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
