@extends('templates.main')

@section('titulo', 'Alterando: ' . $membro->nome)

@section('conteudo')
    <h1>Alterando membro: {{ $membro->nome }}</h1>
    <form action="{{ route('update', ['id' => $membro->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $membro->nome }}">

        <label for="cpf">CPF(somente números):</label>
        <input type="text" name="cpf" id="cpf" maxlength="11" value="{{ $membro->cpf }}">

        <label for="endereco">Endereço completo:</label>
        <input type="text" name="endereco" id="endereco" value="{{ $membro->endereco }}">
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" value="{{ $membro->cidade }}">

        <label for="celular">Celular:</label>
        <input type="tel" name="celular" id="celular" placeholder="049 98842-6048"
            pattern="[0-9]{3} [0-9]{1} [0-9]{4}-[0-9]{4}" value="{{ $membro->celular }}">
        <input type="submit" value="alterar">
    </form>
    <br>
    <br>

    <form action="{{ route('show', ['id' => '3']) }}" method="post">
        {{-- Corrigir este form, para que quando o usuário digitar e apertar em enviar, seja buscado pelo nome dele e não pelo ID --}}
        @csrf
        <label for="pesquisar-membro">Consultar membro:</label>
        <input type="search" name="pesquisar-membro" id="pesquisar-membro">
        <input type="submit" value="pesquisar">
    </form>

    <h2>{{ $membro->nome }}</h2>
    <h3>{{ $membro->cpf }}</h3>
    <h3>{{ $membro->endereco }}</h3>
    <h3>{{ $membro->cidade }}</h3>
    <h3>{{ $membro->celular }}</h3>
@endsection
