<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get('/', [CadastroController::class, 'index'])->name('index');

// Formulário de cadastro de membros
Route::get('/membros', [CadastroController::class, 'create'])->name('create');
Route::post('/membros', [CadastroController::class, 'store'])->name('store');
Route::delete('/membros/{id}', [CadastroController::class, 'destroy'])->name('destroy');

// Exibir pesquisa de um membro
Route::post('/membros/{id}', [CadastroController::class, 'show'])->name('show');

// Formulário de alteração de membros
Route::get('/membros/edit/{id}', [CadastroController::class, 'edit'])->name('edit');
Route::put('/membros/edit/{id}', [CadastroController::class, 'update'])->name('update');

// PDF
use App\Http\Controllers\PDFController;
Route::get('pdf', [PDFController::class, 'listarMembros']);
