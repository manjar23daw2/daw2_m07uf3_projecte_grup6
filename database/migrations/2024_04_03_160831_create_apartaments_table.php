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
        Schema::create('apartaments', function (Blueprint $table) {
            $table->string("codi_unic", 7)->unique();
            $table->string("referencia_catastral", 20);
            $table->string("ciutat");
            $table->string("barri");
            $table->string("nom_carrer");
            $table->integer("numero_carrer");
            $table->string("pis");
            $table->integer("llits");
            $table->integer("habitacions");
            $table->boolean("ascensor");
            $table->string("calefacció");
            $table->boolean("aire_condicionat");
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartaments');
    }
};
