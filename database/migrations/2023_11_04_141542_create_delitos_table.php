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
        Schema::create('delitos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('policia_id');
            $table->string('titulo');
            $table->string('tipo');
            $table->text('descripcion');
            $table->string('ubicacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delitos');
    }
};
