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
        return view('inicio', ['membros' => $membros]);
    }
    
    public function create(){
        return view('cadastro-membros.cadastro');
    }

    public function store(Request $request)
    {
        $membro = new Membro();

        $membro->nome = $request->nome;
        // select situacao
        // $membro->situacao = 0 || 1 || 2 || 3 || 4 || 5;

        // Guia Dados Cadastrais
        $membro->cpf = $request->cpf;
        $membro->endereco = $request->endereco;
        $membro->cidade = $request->cidade;
        $membro->celular = $request->celular;

        // guia Complemento
        $membro->complemento = $request->complemento;
        $membro->batismoAguas = $request->batismoAguas;
        $membro->dataBatismoAguas = $request->dataBatismoAguas;
        $membro->batismoES = $request->batismoES;
        $membro->dataBatismoES = $request->dataBatismoES;
        // radio button dizimista
        // $membro->dizimista = 0 ou 1 ??

        $membro->save();

        return redirect('/')->with('msg', 'Membro cadastrado com sucesso!');
    }

    public function show($id = 1)
    {
        $membro = Membro::findOrFail($id);

        return view('cadastro-membros.show', ['membro' => $membro]);
    }

    public function destroy($id)
    {
        Membro::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Membro excluído com sucesso!');
    }

    public function edit($id)
    {
        $membro = Membro::findOrFail($id);

        return view('cadastro-membros.edit', ['membro' => $membro]);
    }

    public function update(Request $request){

        Membro::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('msg', 'Membro alterado com sucesso!');
    }
}