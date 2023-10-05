<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab_Noticia_Diaria extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'titulo_not_dia',
        'descricao_not_dia',
        'conteudo_not_dia',
        'imagem_not_dia',
    ];
}
