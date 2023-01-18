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

Route::get('/', [CadastroController::class, 'index'])->name('index');
Route::post('/membros/{id?}', [CadastroController::class, 'show'])->name('show');

Route::post('/membros', [CadastroController::class, 'store'])->name('store');
