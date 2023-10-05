<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab_Desporto extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo_des',
        'descricao_des',
        'conteudo_des',
        'imagem_des',
    ];
}
