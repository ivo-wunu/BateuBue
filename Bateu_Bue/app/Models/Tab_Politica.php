<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab_Politica extends Model
{
    use HasFactory;
    protected $fillable =[
        'titulo_poli',
        'descricao_poli',
        'conteudo_poli',
        'imagem_poli',
    ];
}