<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab_Africa extends Model
{
    use HasFactory;
    protected $fillable =[
        'titulo_afri',
        'descricao_afri',
        'conteudo_afri',
        'imagem_afri',
    ];
}
