
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\PDFController;

Route::get('/', [CadastrosController::class, 'main'])->name('main');

// Formulário de cadastro de membros
Route::get('/membros', [CadastrosController::class, 'create'])->name('create');
Route::post('/membros', [CadastrosController::class, 'store'])->name('store');
Route::delete('/membros/{id}', [CadastrosController::class, 'destroy'])->name('destroy');

Route::get('/membros/edit/{id}', [CadastrosController::class, 'edit'])->name('edit');
Route::put('/membros/edit/{id}', [CadastrosController::class, 'update'])->name('update');


// Exibir pesquisa de um membro
Route::post('/membros/{id}', [CadastrosController::class, 'show'])->name('show');


// Impressão de PDF
// Listagem de todos os Membros e congregados
Route::get('listagem', [PDFController::class, 'listagem_todos_membros']);

// Carteirinhas de Membros
Route::get('exemplo_carteirinhas', [PDFController::class, 'exemplo_carteirinha_membros'])->name('exemplo_carteirinhas');

Route::get('carteirinhas', [PDFController::class, 'carteirinha_membros'])->name('carteirinhas');