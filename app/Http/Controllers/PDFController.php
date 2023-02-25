<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Membro;

// Usando Metodos da classe PDF
//use Barryvdh\DomPDF\Facade\Pdf;
use Pdf;
// composer remove drupal/pathauto

class PDFController extends Controller
{
    public function listagem_membros()
    {
        // $membros = Membro::all();
        // $pdf = PDF::loadView('listagem.listarTodosMembrosPDF', compact('membros'));
        $pdf = PDF::loadView('listagem.listarTodosMembrosPDF');
        return $pdf
            ->setPaper('a4')
            ->setWarnings(false)
            ->stream('Listagem_Membros');
    }

    public function carteirinha_membros()
    {
        $membros = Membro::all();
        $pdf = PDF::loadView('listagem.carteirinhaTodosMembrosPDF', compact('membros'));

        return $pdf
            ->setPaper('a4')
            ->setWarnings(false)
            ->stream('Carteiras_Membros');
        return view('listagem.carteirinhaTodosMembrosPDF', ['membros' => $membros]);
    }
}
