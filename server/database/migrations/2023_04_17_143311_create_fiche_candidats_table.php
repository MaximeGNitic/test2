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
        Schema::create('fiche_candidats', function (Blueprint $table) {
            $table->id();
            $table->string('cand_nom');
            $table->string('cand_prenom');
            $table->string('cand_adresse');
            $table->string('cand_ville');
            $table->string('cand_telephone');
            $table->string('cand_email');
            $table->string('langue');
            $table->text('cand_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiche_candidats');
    }
};
