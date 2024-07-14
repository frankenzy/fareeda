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
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produit_id');
            $table->integer('quantite');
            $table->integer('prix_unitaire');
            $table->integer('sous_total');
            $table->integer('total');
            $table->string('adresse_livraison')->nullable();
            $table->string('statut')->default('en_cours');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paniers');
    }
};
