<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        return view('Paginas/home');
    }
    public function desporto(){
        return view('Paginas/desporto');
    }
    public function africa(){
        return view('Paginas/africa');
    }
    public function cultura(){
        return view('Paginas/cultura');
    }
    public function politica(){
        return view('Paginas/politica');
    }
    public function noticias(){
        return view('Paginas/noticias');
    }

    //Funções Para Os Formularios De Pubçicação De Conteudos
    public function Menu(){
        return view('Post/manster_form');
    }

    public function form_africa(){
        return view('Formularios/form_africa');
    }
    public function form_cultura(){
        return view('Formularios/form_cultura');
    }
    public function form_desporto(){
        return view('Formularios/form_desporto');
    }
    public function form_noticia_diaria(){
        return view('Formularios/form_noticia_diaria');
    }
    public function form_noticia(){
        return view('Formularios/form_noticias');
    }
    public function form_politica(){
        return view('Formularios/form_politica');
    }




}