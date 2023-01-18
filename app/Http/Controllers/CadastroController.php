<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Usando Model da tabela Membros
use App\Models\Membro;

class CadastroController extends Controller
{
    public function index()
    {
        $membros = Membro::All();
        return view('cadastro', ['membros' => $membros]);
    }

    public function store(Request $request)
    {
        echo "<script>alert('entrou aqui') </script>";
        $membro = new Membro();

        $membro->nome = $request->nome;
        $membro->cpf = $request->cpf;
        $membro->endereco = $request->endereco;
        $membro->cidade = $request->cidade;
        $membro->celular = $request->celular;

        $membro->save();

        return redirect('/');
    }

    public function show($id = 1)
    {
        $membro = Membro::findOrFail($id);

        return view('show', ['membro' => $membro]);
    }
}
