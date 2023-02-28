<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function listagem_todos_membros()
    {
        $cadastros = Cadastro::all();
        $pdf = PDF::loadView('listagem.listarTodosMembrosPDF', compact('cadastros'));

        return $pdf
            ->setPaper('a4')
            ->setWarnings(false)
            ->stream('Listagem_Membros');
    }

    public function exemplo_carteirinha_membros(){
        $cadastros = Cadastro::all();
        return view('listagem.exemplo_carteirinhaTodosMembrosPDF', ['cadastros' => $cadastros]);
    }

    public function carteirinha_membros()
    {
        $cadastros = Cadastro::all();
        $pdf = PDF::loadView('listagem.carteirinhaTodosMembrosPDF', compact('cadastros'));

        return $pdf
            ->setPaper('a4')
            ->setWarnings(false)
            ->stream('Carteiras_Membros');
    }
}
