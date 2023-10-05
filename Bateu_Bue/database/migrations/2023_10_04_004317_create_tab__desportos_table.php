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
        Schema::create('tab__desportos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo_des');
            $table->string('descricao_des');
            $table->string('conteudo_des');
            $table->string('imagem_des');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab__desportos');
    }
};
