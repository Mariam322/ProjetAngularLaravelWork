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
        Schema::create('demande', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('OffreID');
$table->foreign('OffreID')
->references('id')
->on('offre')
->onDelete('restrict')
->onUpdate('restrict');
$table->unsignedBigInteger('StagiaireID');
$table->foreign('StagiaireID')
->references('id')
->on('stagiaire')
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
        Schema::dropIfExists('demande');
    }
};
