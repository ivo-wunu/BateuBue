<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tab_Africa;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

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
    //Form de Cadastro De Materias
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

    //Form para editar as materias
    public function editar_africa(){
        $dados = DB::table('tab__africas')
        ->select('tab__africas.id','tab__africas.titulo_afri','tab__africas.descricao_afri'
        , 'tab__africas.conteudo_afri', 'tab__africas.imagem_afri')
        ->get()
        
        ;

        return view('Editar/editar_africa', ['getById'=> $dados]);
    }
    public function editar_cultura(){
        return view('Editar/editar_cultura');
    }
    public function editar_desporto(){
        return view('Editar/editar_desporto');
    }
    public function editar_noticia_diaria(){
        return view('Editar/editar_not_dia');
    }
    public function editar_noticia(){
        return view('Editar/editar_noticia');
    }
    public function editar_politica(){
        return view('Editar/editar_politica');
    }

        //Form para Listar as materias
        public function listar_africa(){
            return view('Listar/listar_africa');
        }
        public function listar_cultura(){
            return view('Listar/listar_cultura');
        }
        public function listar_desporto(){
            return view('Listar/listar_desporto');
        }
        public function listar_noticia_diaria(){
            return view('Listar/listar_not_dia');
        }
        public function listar_noticia(){
            return view('Listar/listar_noticias');
        }
        public function listar_politica(){
            return view('Listar/listar_politica');
        }



        public function ver_africa(){
            return view('Paginas/africa');
        }
    

}