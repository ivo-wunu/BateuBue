<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab_Cultura extends Model
{
    use HasFactory;
    protected $fillable =[
        'titulo_cult',
        'descricao_cult',
        'conteudo_cult',
        'imagem_cult',
    ];
}
