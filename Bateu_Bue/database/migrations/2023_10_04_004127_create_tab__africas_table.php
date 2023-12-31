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
        Schema::create('tab__africas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo_afri');
            $table->string('descricao_afri');
            $table->string('conteudo_afri');
            $table->string('imagem_afri');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab__africas');
    }
};
