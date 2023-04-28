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
        Schema::create('appliquer_offres', function (Blueprint $table) {
            $table->unsignedBigInteger('offre_id');
            $table->foreign('offre_id')->references('id')->on('offres_emploi');
            $table->unsignedBigInteger('cand_id');
            $table->foreign('cand_id')->references('id')->on('candidats');
            $table->date('appoffre_dateAppliquer');
            $table->string('appoffre_dispo');
            $table->string('appoffre_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiche_appliquer_offres');
    }
};
