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
        Schema::create('taches_offres', function (Blueprint $table) {
            $table->unsignedBigInteger('tache_id');
            $table->foreign('tache_id')->references('id')->on('taches');
            $table->id('offre_id');
            $table->foreign('offre_id')->references('id')->on('offres_emploi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_taches_offres_');
    }
};
