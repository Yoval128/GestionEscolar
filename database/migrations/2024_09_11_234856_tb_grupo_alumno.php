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
        Schema::create('tb_grupo_alumno', function (Blueprint $table) {
            $table->bigIncrements('id_grupo_alumno');
            $table->string('id_alumno', 30);
            $table->string('id_grupo', 50);
            $table->string('cuatrimestre', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_grupo_alumno');
    }
};
