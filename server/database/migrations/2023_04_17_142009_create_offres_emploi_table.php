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
        Schema::create('offres_emplois', function (Blueprint $table) {
            $table->id();
            $table->integer('offre_nombreAnnee');
            $table->date('offre_datePublication');
            $table->date('offre_debutMandat');
            $table->string('offre_horaire');
            $table->string('offre_langue');
            $table->text('offre_infoSup');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres_emploi');
    }
};
