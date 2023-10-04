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
    //
    //editar m«usica
    public function editarMusica(Request $request){
        $id = $request->id;
        //$musica = Musica::find($id);
        //return view('Musica.editar',['lista'=>$musica]);
    }

    

    public function cadastrar_noticia(Request $receber){
        $dadoMusica=$receber->only('titulo','descricao', 'conteudo');//Pega dadoss

        $caminho=$receber->file('imagem');//caminho do ficheiro
        $titulo=$caminho->getClientOriginalName();
        $caminho->move(public_path(), $titulo);
        
        $dadoMusica['imagem']=$titulo;

        Tab_Africa::create($dadoMusica);
        return redirect('')->with("msg","Informação Cadastrada Com Sucesso");
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
