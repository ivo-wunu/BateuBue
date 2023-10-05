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
        Schema::create('tab__politicas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo_poli');
            $table->string('descricao_poli');
            $table->string('conteudo_poli');
            $table->string('imagem_poli'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab__politicas');
    }
};
