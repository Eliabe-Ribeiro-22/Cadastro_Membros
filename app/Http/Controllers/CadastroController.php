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
        $membro = new Membro();

        $membro->nome = $request->nome;
        $membro->cpf = $request->cpf;
        $membro->endereco = $request->endereco;
        $membro->cidade = $request->cidade;
        $membro->celular = $request->celular;

        $membro->save();

        return redirect('/')->with('msg', 'Membro cadastrado com sucesso!');
    }

    public function show($id = 1)
    {
        $membro = Membro::findOrFail($id);

        return view('show', ['membro' => $membro]);
    }

    public function destroy($id)
    {
        Membro::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Membro excluído com sucesso!');
    }

    public function edit($id)
    {
        $membro = Membro::findOrFail($id);

        return view('edit', ['membro' => $membro]);
    }

    public function update(Request $request){

        Membro::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('msg', 'Membro alterado com sucesso!');
    }
}
