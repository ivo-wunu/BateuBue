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





}
