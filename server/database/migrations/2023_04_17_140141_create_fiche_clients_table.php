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
        Schema::create('fiche_clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_nom');
            $table->string('client_adresse');
            $table->string('client_telephone');
            $table->string('client_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiche_client');
    }
};
