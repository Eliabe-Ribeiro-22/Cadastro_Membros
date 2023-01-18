<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\CadastroController;

// Essa rota deveria ter o path: /membros
Route::get('/', [CadastroController::class, 'index'])->name('index');

Route::get('/membros', [CadastroController::class, 'create'])->name('create');

//  Salvar um registro
Route::post('/membros', [CadastroController::class, 'store'])->name('store');

// Exibir pesquisa de um membro
Route::post('/membros/{id}', [CadastroController::class, 'show'])->name('show');

// Deletar um registro
Route::delete('/membros/{id}', [CadastroController::class, 'destroy'])->name('destroy');

// Exibir formulário de alteração
Route::get('/membros/edit/{id}', [CadastroController::class, 'edit'])->name('edit');

// Realizar alteração de um membro
Route::put('/membros/edit/{id}', [CadastroController::class, 'update'])->name('update');