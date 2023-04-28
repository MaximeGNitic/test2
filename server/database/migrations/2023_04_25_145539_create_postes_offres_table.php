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
        Schema::create('postes_offres', function (Blueprint $table) {
            $table->unsignedBigInteger('poste_id');
            $table->foreign('poste_id')->references('id')->on('formations');
            $table->unsignedBigInteger('offre_id');
            $table->foreign('offre_id')->references('id')->on('offres_emploi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_postes_offres');
    }
};
