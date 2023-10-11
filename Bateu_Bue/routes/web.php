<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FuncoesController;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Paginas/home');
});

//Route Para  Navegação Entre As Paáginas
Route::get('/home', [Controller:: class, 'home'])->name('pag_inicial');
Route::get('/desporto', [Controller::class, 'desporto'])->name('pag_desporto');
Route::get('/africa', [Controller::class, 'africa'])->name('pag_africa');
Route::get('/contactos', [ContactoController:: class, 'contactos'])->name('pag_contactos');
Route::get('/cultura', [ContactoController:: class, 'cultura'])->name('pag_cultura');
Route::get('/politica', [ContactoController:: class, 'politica'])->name('pag_politica');
Route::get('/noticias', [ContactoController:: class, 'noticias'])->name('pag_noticias');

//Route Para Os Formularios De Pubçicação De Conteudos
Route::get('/form_africa', [ContactoController:: class, 'form_africa'])->name('pag_form_africa');
Route::get('/form_cultura', [ContactoController:: class, 'form_cultura'])->name('pag_form_cultura');
Route::get('/form_desporto', [ContactoController:: class, 'form_desporto'])->name('pag_form_desporto');
Route::get('/form_noticia_diaria', [ContactoController:: class, 'form_noticia_diaria'])->name('pag_form_noticia_diaria');
Route::get('/form_noticia', [ContactoController:: class, 'form_noticia'])->name('pag_form_noticia');
Route::get('/form_politica', [ContactoController:: class, 'form_politica'])->name('pag_form_politica');

//Funções Para Fazer Cadastro De Pubçicação De Conteudos
Route::post('/cadastro_africa', [FuncoesController:: class, 'cadastrar_Africa'])->name('pag_cadastro_africa');
Route::post('/cadastrar_desporto', [FuncoesController:: class, 'cadastrar_desporto'])->name('pag_cadastrar_desporto');
Route::post('/cadastrar_cultura', [FuncoesController:: class, 'cadastrar_cultura'])->name('pag_cadastrar_cultura');
Route::post('/cadastrar_not_diario', [FuncoesController:: class, 'cadastrar_not_diario'])->name('pag_cadastrar_not_diario');
Route::post('/cadastrar_noticias', [FuncoesController:: class, 'cadastrar_noticias'])->name('pag_cadastrar_noticias');
Route::post('/cadastrar_politica', [FuncoesController:: class, 'cadastrar_politica'])->name('pag_cadastrar_politica');

//Funções Para Listar De Pubçicação De Conteudos
Route::get('/listar_africa', [FuncoesController:: class, 'listar_africa'])->name('pag_listar_africa');
Route::get('/listar_desporto', [FuncoesController:: class, 'listar_desporto'])->name('pag_listar_desporto');
Route::get('/listar_cultura', [FuncoesController:: class, 'listar_cultura'])->name('pag_listar_cultura');
Route::get('/listar_not_diario', [FuncoesController:: class, 'listar_not_diario'])->name('pag_listar_not_diario');
Route::get('/listar_noticias', [FuncoesController:: class, 'listar_noticias'])->name('pag_listar_noticias');
Route::get('/listar_politica', [FuncoesController:: class, 'listar_politica'])->name('pag_listar_politica');

//Funções Para Eliminar Pubçicação De Conteudos
Route::delete('delete_africa/{id}', [FuncoesController::class, 'destroy_africa']);
Route::delete('delete_cultura/{id}', [FuncoesController::class, 'destroy_cultura']);
Route::delete('delete_desporto/{id}', [FuncoesController::class, 'destroy_desporto']);
Route::delete('delete_not_dia/{id}', [FuncoesController::class, 'destroy_not_dia']);
Route::delete('delete_noticia/{id}', [FuncoesController::class, 'destroy_noticia']);
Route::delete('delete_politica/{id}', [FuncoesController::class, 'destroy_politica']);

//Route Para Os Formularios De Editar Conteudos
//Route::get('/editar_africa/{id}', [Controller:: class, 'editar_africa'])->name('pag_editar_africa');
Route::get('/Editar/editar_africa/{id}', [Controller:: class, 'editar_africa'])->name('edit_afri');
Route::get('/editar_cultura', [Controller:: class, 'editar_cultura']);
Route::get('/editar_desporto', [Controller:: class, 'editar_desporto']);
Route::get('/editar_noticia_diaria', [Controller:: class, 'editar_noticia_diaria']);
Route::get('/editar_noticia', [Controller:: class, 'editar_noticia']);
Route::get('/editar_politica', [Controller:: class, 'editar_politica']);

//Funções Para Ver Pubçicação De Conteudos
//Route::get('/Editar/editar_africa/{id}', [FuncoesController:: class, 'edit_africa']);
Route::put('/Editar/update/{id}', [Controller:: class, 'update']);