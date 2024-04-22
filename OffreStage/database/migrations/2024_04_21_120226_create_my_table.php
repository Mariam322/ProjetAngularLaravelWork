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
        Schema::create('offre', function (Blueprint $table) {
            $table->id();
            $table->string('titre',30)->unique();
            $table->string('DateDebut');
            $table->string('DateFin');
            $table->string('Description');
            $table->string('type');
            $table->string('lieux');
            $table->string('etat');
            $table->unsignedBigInteger('recruteurID');
            $table->foreign('recruteurID')
            ->references('id')
            ->on('recruteur')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('souscategorieID');
            $table->foreign('souscategorieID')
            ->references('id')
            ->on('sous_categories')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offre');
    }
};
