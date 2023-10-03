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

Route::get('/home', [Controller:: class, 'home'])->name('pag_inicial');
Route::get('/desporto', [Controller::class, 'desporto'])->name('pag_desporto');
Route::get('/africa', [Controller::class, 'africa'])->name('pag_africa');
Route::get('/contactos', [ContactoController:: class, 'contactos'])->name('pag_contactos');
Route::get('/cultura', [ContactoController:: class, 'cultura'])->name('pag_cultura');
Route::get('/politica', [ContactoController:: class, 'politica'])->name('pag_politica');
Route::get('/noticias', [ContactoController:: class, 'noticias'])->name('pag_noticias');


Route::post('/entar_contacto', [ContactoController:: class, 'entar_contacto'])->name('pag_entar_contact');