@extends('templates.main')

@section('titulo', 'Alterando: ' . $membro->nome)

@section('conteudo')
    <h1>Alterando membro: {{ $membro->nome }}</h1>
    <form action="{{ route('update', ['id' => $membro->id]) }}" method="post">
        @csrf
        @method('PUT')
        <input type="submit" value="alterar">
    </form>

    {{-- All data of membro --}}
    {{-- Campos acima das guias --}}
    <h2>{{ $membro->nome }}</h2>
    <h3>{{ $membro->situacao }}</h3>
    <h3>{{ $membro->congregacao }}</h3>
    <h3>{{ $membro->setor }}</h3>

    {{-- Guia dados cadastrais --}}
    <h3>{{ $membro->cpf }}</h3>
    <h3>{{ $membro->rg }}</h3>
    <h3>{{ $membro->naturalidade }}</h3>
    <h3>{{ $membro->nacionalidade }}</h3>
    <h3>{{ $membro->profissao }}</h3>
    <h3>{{ $membro->sexo }}</h3>
    <h3>{{ $membro->estadoCivil }}</h3>
    <h3>{{ $membro->grauInstrucao }}</h3>
    <h3>{{ $membro->pai }}</h3>
    <h3>{{ $membro->mae }}</h3>
    <h3>{{ $membro->endereco }}</h3>
    <h3>{{ $membro->numeroLar }}</h3>
    <h3>{{ $membro->complementoEndereco }}</h3>
    <h3>{{ $membro->bairro }}</h3>
    <h3>{{ $membro->cidade }}</h3>    
    <h3>{{ $membro->uf }}</h3>
    <h3>{{ $membro->cep }}</h3>
    <h3>{{ $membro->telefone }}</h3>
    <h3>{{ $membro->celular }}</h3>
    <h3>{{ $membro->email }}</h3>
    
    {{-- Guia complemento --}}
@endsection
