<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tab_Africa;
use App\Models\Tab_Cultura;
use App\Models\Tab_Desporto;
use App\Models\Tab_Noticia_Diaria;
use App\Models\Tab_Noticia;
use App\Models\Tab_Politica;

class FuncoesController extends Controller
{

    //Cadastrar Informações Africano
    public function cadastrar_Africa(Request $receber){
        $dadoAfrica=$receber->only('titulo_afri','descricao_afri', 'conteudo_afri');//Pega dadoss

        $caminho=$receber->file('imagem');//caminho do ficheiro
        $titulo=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo);
        
        $dadoAfrica['imagem']=$titulo;

        Tab_Africa::create($dadoAfrica);
        return redirect('pag_africa')->with("msg","Informação Cadastrada Com Sucesso");
    }
    //Cadastrar informações Desportivo
    public function cadastrar_desporto(Request $receber){
        $dadoDesporto=$receber->only('titulo_des','descricao_des', 'conteudo_des');//Pega dadoss

        $caminho=$receber->file('imagem_des');//caminho do ficheiro
        $titulo=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo);
        
        $dadoDesporto['imagem_des']=$titulo;

        Tab_Desporto::create($dadoDesporto);
        return redirect('pag_desporto')->with("msg","Informação Cadastrada Com Sucesso");
    }
        //Cadastrar informações Cultural
        public function cadastrar_cultura(Request $receber){
            $dadoCultura=$receber->only('titulo_cult','descricao_cult', 'conteudo_cult');//Pega dadoss
    
            $caminho=$receber->file('imagem_cult');//caminho do ficheiro
            $titulo=$caminho->getClientOriginalName();
            $caminho->move(public_path(), $titulo);
            
            $dadoCultura['imagem_cult']=$titulo;
    
            Tab_Cultura::create($dadoCultura);
            return redirect('pag_cultura')->with("msg","Informação Cadastrada Com Sucesso");
        }
            //Cadastrar informações Noticias Diaria
    public function cadastrar_not_diario(Request $receber){
        $dadoNot_dia=$receber->only('titulo_not_dia','descricao_not_dia', 'conteudo_not_dia');//Pega dadoss

        $caminho=$receber->file('imagem_not_dia');//caminho do ficheiro
        $titulo=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo);
        
        $dadoNot_dia['imagem_not_dia']=$titulo;

        Tab_Noticia_Diaria::create($dadoNot_dia);
        return redirect('listM')->with("msg","Informação Cadastrada Com Sucesso");
    }
        //Cadastrar informações Noticias
        public function cadastrar_noticias(Request $receber){
            $dadoNoticias=$receber->only('titulo_not','descricao_not', 'conteudo_not');//Pega dadoss
    
            $caminho=$receber->file('imagem_not');//caminho do ficheiro
            $titulo=$caminho->getClientOriginalName();
            $caminho->move(public_path(), $titulo);
            
            $dadoNoticias['imagem_not']=$titulo;
    
            Tab_Noticia::create($dadoNoticias);
            return redirect('pag_form_noticia')->with("msg","Informação Cadastrada Com Sucesso");
        }    
            //Cadastrar informações Politico
    public function cadastrar_politica(Request $receber){
        $dadoPolitica=$receber->only('titulo_poli','descricao_poli', 'conteudo_poli');//Pega dadoss

        $caminho=$receber->file('imagem_poli');//caminho do ficheiro
        $titulo=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo);
        
        $dadoPolitica['imagem_poli']=$titulo;

        Tab_Politica::create($dadoPolitica);
        return redirect('pag_politica')->with("msg","Informação Cadastrada Com Sucesso");
    }    

/**
    public function listarMusic(){
        $listarMusica=Music::get();
        return view('listMusic', ['dado'=>$listarMusica])->with("msg","Musica Cadastrado Com Sucesso");
    }

    public function verMusic(Request $request){
        $id=$request->id;
        $musica=music::find($id);
        return view('Music.verMusic', ['mus'=>musica]);
    }

    public function editMusic(Request $dados){
        $id=$dados->id;
        $user=music::find($id);
        return view('Music.editarMussic', ['use'=>$user]);
    }
    
    public function deletMusic($id_music){
        $dados = Music::findOrFail($id_music);
        $dados->delete();
        $musicas = Music::all();
        return view('formulario_music')->whith('musics', $musicas);
    }
**/
}
