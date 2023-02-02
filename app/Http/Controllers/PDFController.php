<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Membro;

// Usando Metodos da classe PDF
// use PDF;

class PDFController extends Controller
{
    // O Pdf não funciona pois é um problema de versão do spatie, muito antigo para o PDF
    public function listagem_membros(){
    
        $membros = Membro::all();
        // $pdf = PDF::loadView('listagem.listarTodosMembrosPDF', compact('membros'));

        // return $pdf->setPaper('a4')->stream('Listagem_Membros');
        return view('listagem.listarTodosMembrosPDF', ['membros' => $membros]);
    }

    public function carteirinha_membros(){
        $membros = Membro::all();
        // $pdf = PDF::loadView('listagem.carteirinhaTodosMembrosPDF', compact('membros'));

        // return $pdf->setPaper('a4')->stream('Carteiras_Membros');
        return view('listagem.carteirinhaTodosMembrosPDF', ['membros' => $membros]);
    }
    
}
