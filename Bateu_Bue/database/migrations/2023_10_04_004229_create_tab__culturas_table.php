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
        Schema::create('tab__culturas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo_cult');
            $table->string('descricao_cult');
            $table->string('conteudo_cult');
            $table->string('imagem_cult');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab__culturas');
    }
};
