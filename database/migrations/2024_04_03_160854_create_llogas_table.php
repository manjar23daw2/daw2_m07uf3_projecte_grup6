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
        Schema::create('llogas', function (Blueprint $table) {
            $table->string("dni", 9);
            $table->foreign("dni")->references("dni")->on("clients")->onDelete("cascade")->onUpdate("cascade");
            $table->string("codi_unic", 7);
            $table->foreign("codi_unic")->references("codi_unic")->on("apartaments")->onDelete('cascade')->onUpdate("cascade");
            $table->primary(['dni', 'codi_unic']);
            $table->timestamp("data_inici_lloguer");
            $table->timestamp("hora_inici_lloguer");
            $table->timestamp("data_final_lloguer");
            $table->timestamp("hora_final_lloguer");
            $table->string("lloc_lliurament_claus");
            $table->string("lloc_devolució_claus");
            $table->float("preu_dia");
            $table->boolean("diposit");
            $table->float("quantitat_diposit");
            $table->string("tipus_assegurança");
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llogas');
    }
};
