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

        $caminho=$receber->file('imagem_afri');//caminho do ficheiro
        $titulo=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo);
        
        $dadoAfrica['imagem_afri']=$titulo;

        Tab_Africa::create($dadoAfrica);
        return redirect('/listar_africa')->with("msg","Informação Cadastrada Com Sucesso");
    }
    //Cadastrar informações Desportivo
    public function cadastrar_desporto(Request $receber){
        $dadoDesporto=$receber->only('titulo_des','descricao_des', 'conteudo_des');//Pega dadoss

        $caminho=$receber->file('imagem_des');//caminho do ficheiro
        $titulo=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo);
        
        $dadoDesporto['imagem_des']=$titulo;

        Tab_Desporto::create($dadoDesporto);
        return redirect('/listar_desporto')->with("msg","Informação Cadastrada Com Sucesso");
    }
    //Cadastrar informações Cultural
    public function cadastrar_cultura(Request $receber){
        $dadoCultura=$receber->only('titulo_cult','descricao_cult', 'conteudo_cult');//Pega dadoss
    
        $caminho=$receber->file('imagem_cult');//caminho do ficheiro
        $titulo_cult=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo_cult);
            
        $dadoCultura['imagem_cult']=$titulo_cult;
    
        Tab_Cultura::create($dadoCultura);
        return redirect('/listar_cultura')->with("msg","Informação Cadastrada Com Sucesso");
    }
    //Cadastrar informações Noticias Diaria
    public function cadastrar_not_diario(Request $receber){
        $dadoNot_dia=$receber->only('titulo_not_dia','descricao_not_dia', 'conteudo_not_dia');//Pega dadoss

        $caminho=$receber->file('imagem_not_dia');//caminho do ficheiro
        $titulo_not_dia=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo_not_dia);
        
        $dadoNot_dia['imagem_not_dia']=$titulo_not_dia;

        Tab_Noticia_Diaria::create($dadoNot_dia);
        return redirect('/listar_not_diario')->with("msg","Informação Cadastrada Com Sucesso");
    }
    //Cadastrar informações Noticias
    public function cadastrar_noticias(Request $receber){
        $dadoNoticias=$receber->only('titulo_not','descricao_not', 'conteudo_not');//Pega dadoss
    
        $caminho=$receber->file('imagem_not');//caminho do ficheiro
        $titulo_not=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo_not);
            
        $dadoNoticias['imagem_not']=$titulo_not;
    
        Tab_Noticia::create($dadoNoticias);
        return redirect('/listar_noticias')->with("msg","Informação Cadastrada Com Sucesso");
    }    
    //Cadastrar informações Politico
    public function cadastrar_politica(Request $receber){
        $dadoPolitica=$receber->only('titulo_poli','descricao_poli', 'conteudo_poli');//Pega dadoss

        $caminho=$receber->file('imagem_poli');//caminho do ficheiro
        $titulo_poli=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo_poli);
        
        $dadoPolitica['imagem_poli']=$titulo_poli;

        Tab_Politica::create($dadoPolitica);
        return redirect('/listar_politica')->with("msg","Informação Cadastrada Com Sucesso");
    }

    //Listar Informações de África
    public function listar_africa(){
        $listar_afri=Tab_Africa::get();
        return view('Listar/listar_africa', ['dado'=>$listar_afri]);
    }
    //Listar Informações de Cultura
    public function listar_cultura(){
        $listar_cult=Tab_Cultura::get();
        return view('Listar/listar_cultura', ['dado'=>$listar_cult]);
    }
    //Listar Informações de Desporto
    public function listar_desporto(){
        $listar_desp=Tab_Desporto::get();
        return view('Listar/listar_desporto', ['dado'=>$listar_desp]);
    }
    //Listar Informações de Notícia Diária
    public function listar_not_diario(){
        $listar_not_dia=Tab_Noticia_Diaria::get();
        return view('Listar/listar_not_dia', ['dado'=>$listar_not_dia]);
    }
    //Listar Informações de Notícias
    public function listar_noticias(){
        $listar_not=Tab_Noticia::get();
        return view('Listar/listar_noticia', ['dado'=>$listar_not]);
    }
    //Listar Informações de Política
    public function listar_politica(){
        $listar_poli=Tab_Politica::get();
        return view('Listar/listar_politica', ['dado'=>$listar_poli]);
    }
    //Eliminar Informações Africano
    public function destroy_africa($id){
        Tab_Africa::findOrfail($id)->delete();
        return redirect('/listar_africa')->with('msg', 'Publicação Eliminado Com Sucesso!');
    }
    //Eliminar Informações Cultura
    public function destroy_cultura($id){
        Tab_Cultura::findOrfail($id)->delete();
        return redirect('/listar_cultura')->with('msg', 'Publicação Eliminado Com Sucesso!');
    }
    //Eliminar Informações Desporto
    public function destroy_desporto($id){
        Tab_Desporto::findOrfail($id)->delete();
        return redirect('/listar_desporto')->with('msg', 'Publicação Eliminado Com Sucesso!');
    }
    //Eliminar Informações Noticia_Diaria
    public function destroy_not_dia($id){
        Tab_Noticia_Diaria::findOrfail($id)->delete();
        return redirect('/listar_not_dia')->with('msg', 'Publicação Eliminado Com Sucesso!');
    }
    //Eliminar Informações Noticia
    public function destroy_noticia($id){
        Tab_Noticia::findOrfail($id)->delete();
        return redirect('/listar_noticias')->with('msg', 'Publicação Eliminado Com Sucesso!');
    }
    //Eliminar Informações Politica
    public function destroy_politica($id){
        Tab_Politica::findOrfail($id)->delete();
        return redirect('/listar_politica')->with('msg', 'Publicação Eliminado Com Sucesso!');
    }
    public function edit_africa($id){
        $africa = Tab_Africa::findOrfail($id);
        return view('Editar/editar_africa', ['dado'=>$africa]);
    }
}    
/**
    //Editar Informações Africano
    public function edit_africa(Request $dados){
        $id=$dados->id;
        $titulo_afri=Tab_Africa::find($id);
        return view('Music.editarMussic', ['titulo_afri'=>$titulo_afri]);
    }

    public function verMusic(Request $request){
        $id=$request->id;
        $musica=music::find($id);
        return view('Music.verMusic', ['mus'=>musica]);
    }
    
    public function deletMusic($id_music){
        $dados = Music::findOrFail($id_music);
        $dados->delete();
        $musicas = Music::all();
        return view('formulario_music')->whith('musics', $musicas);
    }
**/