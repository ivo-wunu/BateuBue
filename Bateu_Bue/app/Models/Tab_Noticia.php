<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab_Noticia extends Model
{
    use HasFactory;
    protected $fillable =[
        'titulo_not',
        'descricao_not',
        'conteudo_not',
        'imagem_not',
    ];
}
