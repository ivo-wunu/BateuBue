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
        Schema::create('tab__noticia__diarias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo_not_dia');
            $table->string('descricao_not_dia');
            $table->string('conteudo_not_dia');
            $table->string('imagem_not_dia');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab__noticia__diarias');
    }
};
