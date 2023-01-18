@extends('templates.main')

@section('titulo', 'Cadastro de Membros')

@section('conteudo')
    <h1>Cadastro de Membros</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="cpf">CPF(somente números):</label>
        <input type="text" name="cpf" id="cpf" maxlength="11">

        <label for="endereco">Endereço completo:</label>
        <input type="text" name="endereco" id="endereco">
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade">

        <label for="celular">Celular:</label>
        <input type="tel" name="celular" id="celular" placeholder="049 98842-6048"
            pattern="[0-9]{3} [0-9]{1} [0-9]{4}-[0-9]{4}">
        <input type="submit" value="enviar">
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
    @foreach ($membros as $membro)
        <h2>{{ $membro->nome }}</h2>
        <h3>{{ $membro->cidade }}</h3>
        <h3>{{ $membro->celular }}</h3>
        <form action="{{ route('show', ['id' => $membro->id]) }}" method="post">
            @csrf
            <input type="submit" value="Ver outras informações">
        </form>

        <a href="{{ route('edit', ['id' => $membro->id]) }}">Editar</a>

        <form action="{{ route('destroy', ['id' => $membro->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button>Excluir</button>
        </form>
        <br><br>
    @endforeach
@endsection
