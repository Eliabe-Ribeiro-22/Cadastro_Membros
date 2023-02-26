<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CadastrosController;

Route::get('/', [CadastrosController::class, 'main'])->name('main');

// Formulário de cadastro de membros
Route::get('/membros', [CadastrosController::class, 'create'])->name('create');
Route::post('/membros', [CadastrosController::class, 'store'])->name('store');
Route::delete('/membros/{id}', [CadastrosController::class, 'destroy'])->name('destroy');

// Exibir pesquisa de um membro
Route::post('/membros/{id}', [CadastrosController::class, 'show'])->name('show');

// Formulário de alteração de membros
Route::get('/membros/edit/{id}', [CadastrosController::class, 'edit'])->name('edit');
Route::put('/membros/edit/{id}', [CadastrosController::class, 'update'])->name('update');

// Impressão de PDF
use App\Http\Controllers\PDFController;

// Listagem de todos os Membros e congregados
Route::get('listagem', [PDFController::class, 'listagem_membros']);

// Carteirinhas de Membros
Route::get('carteirinhas', [PDFController::class, 'carteirinha_membros'])->name('carteirinhas');
