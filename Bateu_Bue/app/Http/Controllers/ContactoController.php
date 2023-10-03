<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{

    public function contactos(){
        return view('Paginas/contactos');
    }
    public function entrar_contacto(Request $request){
        $receberdados = $request->only('name','email', 'message');
        Contacto::create($receberdados);
        return redirect()->back()->with('msg','Cadastro feito com sucesso!');
    }
    
}
