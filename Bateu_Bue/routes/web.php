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
    return view('welcome');
});

Route::get('/menu', [Controller:: class, 'menu'])->name('pag_menu');

Route::get('/home', [Controller:: class, 'home'])->name('pag_inicial');
Route::get('/desporto', [Controller::class, 'desporto'])->name('pag_desporto');
Route::get('/africa', [Controller::class, 'africa'])->name('pag_africa');
Route::get('/contactos', [ContactoController:: class, 'contactos'])->name('pag_contactos');
Route::get('/cultura', [ContactoController:: class, 'cultura'])->name('pag_cultura');
Route::get('/politica', [ContactoController:: class, 'politica'])->name('pag_politica');
Route::get('/noticias', [ContactoController:: class, 'noticias'])->name('pag_noticias');


//Route::post('/entar_contacto', [ContactoController:: class, 'entar_contacto'])->name('pag_entar_contact');


//Funções Para Os Formularios De Pubçicação De Conteudos
Route::get('/form_africa', [ContactoController:: class, 'form_africa'])->name('pag_form_africa');
Route::get('/form_cultura', [ContactoController:: class, 'form_cultura'])->name('pag_form_cultura');
Route::get('/form_desporto', [ContactoController:: class, 'form_desporto'])->name('pag_form_desporto');
Route::get('/form_noticia_diaria', [ContactoController:: class, 'form_noticia_diaria'])->name('pag_form_noticia_diaria');
Route::get('/form_noticia', [ContactoController:: class, 'form_noticia'])->name('pag_form_noticia');
Route::get('/form_politica', [ContactoController:: class, 'form_politica'])->name('pag_form_politica');

//
Route::post('/cadastro', [FuncoesController:: class, 'cadastrar_noticia'])->name('pag_cadastro');