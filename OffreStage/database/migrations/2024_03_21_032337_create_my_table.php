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
        Schema::create('souscategorie', function (Blueprint $table) {
            $table->id();
            $table->string('nomscategorie');

$table->unsignedBigInteger('categorieID');
$table->foreign('categorieID')
->references('id')
->on('categorie')
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
        Schema::dropIfExists('souscategorie');
    }
};
