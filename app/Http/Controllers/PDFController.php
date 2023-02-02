<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Usando Model da tabela Membros
use App\Models\Membro;

// Usando Metodos da classe PDF
use PDF;

class PDFController extends Controller
{
    public function listarMembros(){
    // O Pdf não funciona pois é um problema de versão do spatie, muito antigo para o PDF
        $membros = Membro::all();
        $pdf = PDF::loadView('listagem.listarTodosMembrosPDF', compact('membros'));

        return $pdf->setPaper('a4')->stream('Listagem_Membros');
    }
}
