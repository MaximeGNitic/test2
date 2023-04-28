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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cand_id');
            $table->foreign('cand_id')->references('id')->on('fiche_candidats');
            $table->string('exp_titre');
            $table->string('exp_nomEntreprise');
            $table->date('exp_dateDebut');
            $table->date('exp_dateFin');
            $table->text('exp_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
