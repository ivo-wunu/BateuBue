<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tab_Africa;
use App\Models\Tab_Cultura;
use App\Models\Tab_Desporto;
use App\Models\Tab_Noticia;
use App\Models\Tab_Noticia_Diaria;
use App\Models\Tab_Politica;
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

    public function editar_africa($id){
        $afri = Tab_Africa::findOrFail($id);
        return view('Editar/editar_africa', ['afri' => $afri]);
    }
    /*public function update(Request $request){
        Tab_Africa::findOfFail($request->$id) -> update($request->all());
        return redirect('/listar_not_dia')->with('msg', 'Publicação Atualizada Com Sucesso!');
    }*/
    public function editar_cultura($id){
        $cul = Tab_Cultura::findOrFail($id);
        return view('Editar/editar_cultura', ['cul'=> $cul]);
    }

    public function editar_desporto($id){
        $des = Tab_Desporto::findOrFail($id);
        return view('Editar/editar_desporto', ['des'=> $des]);
    }
    public function editar_noticia_diaria($id){
        $not_dia = Tab_Noticia_Diaria::findOrFail($id);
        return view('Editar/editar_not_dia', ['not_dia'=> $not_dia]);
    }
    public function editar_noticia($id){
        $not = Tab_Noticia::findOrFail($id);
        return view('Editar/editar_noticia', ['not'=> $not]);
    }
    public function editar_politica($id){
        $pol = Tab_Politica::findOrFail($id);
        return view('Editar/editar_politica', ['pol'=> $pol]);
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
            $ver_afri= Tab_Africa::get();
            return view('Paginas/africa', ['ver_afri'=>$ver_afri]);
        }
    

}