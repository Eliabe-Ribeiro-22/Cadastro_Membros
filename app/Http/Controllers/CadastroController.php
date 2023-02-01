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

    public function create()
    {
        return view('cadastro-membros.cadastro');
    }

    public function store(Request $request)
    {
        // Faltou dataNascimento, situacao, sexo, dizimista
        $membro = new Membro();

        // Campos acima das guias do formulário
        $membro->nome = $request->nome;
        // situacao
        // $membro->situacao = 0 || 1 || 2 || 3 || 4 || 5;
        $membro->situacao = $request->situacao;
        $membro->congregacao = $request->congregacao;
        $membro->setor = $request->setor;

        // Guia dados cadastrais
        $membro->cpf = $request->cpf;
        $membro->rg = $request->rg;
        $membro->naturalidade = $request->naturalidade;
        // $membro->dataNascimento = $request->dataNascimento;
        $membro->nacionalidade = $request->nacionalidade;
        $membro->profissao = $request->profissao;
        $membro->sexo = $request->sexo;
        $membro->estadoCivil = $request->estadoCivil;
        $membro->grauInstrucao = $request->grauInstrucao;
        $membro->pai = $request->pai;
        $membro->mae = $request->mae;
        $membro->endereco = $request->endereco;
        $membro->numeroLar = $request->numeroLar;
        $membro->complementoEndereco = $request->complementoEndereco;
        $membro->bairro = $request->bairro;
        $membro->cidade = $request->cidade;
        $membro->uf = $request->uf;
        $membro->cep = $request->cep;
        $membro->telefone = $request->telefone;
        $membro->celular = $request->celular;
        $membro->email = $request->email;

        // Guia complemento
        $membro->dataConversao = $request->dataConversao;
        $membro->batismoAguas = $request->batismoAguas;
        $membro->dataBatismoAguas = $request->dataBatismoAguas;
        $membro->batismoES = $request->batismoES;
        $membro->dataBatismoES = $request->dataBatismoES;
        // radio button dizimista
        // $membro->dizimista = 0 ou 1 ??
        $membro->observacoes = $request->observacoes;
        
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

    public function update(Request $request)
    {
        Membro::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('msg', 'Membro alterado com sucesso!');
    }
}
