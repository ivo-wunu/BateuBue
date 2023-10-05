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
        Schema::create('tab__noticias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo_not');
            $table->string('descricao_not');
            $table->string('conteudo_not');
            $table->string('imagem_not'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab__noticias');
    }
};
