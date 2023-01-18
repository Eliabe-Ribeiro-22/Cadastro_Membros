@extends('templates.main')

@section('titulo', 'Cadastro de Membros')

@section('conteudo')
    <h1>Cadastro de Membros</h1>
    <a href="{{ route('create') }}">Novo Membro</a>

    <form action="{{ route('show', ['id' => '3']) }}" method="post">
        {{-- Corrigir este form, para que quando o usuário digitar e apertar em enviar, seja buscado pelo nome dele e não pelo ID --}}
        @csrf
        <label for="pesquisar-membro">Consultar membro:</label>
        <input type="search" name="pesquisar-membro" id="pesquisar-membro">
        <input type="submit" value="pesquisar">
    </form>

    {{-- Exibir alunos cadastrados, utilizando foreach --}}
    <div>Membros Cadastrados:</div>
    <div id="exibir-membros">
        {{-- nome deverá ter rowspan 2 ou 3 --}}
        <button id="nome">Nome</button>
        <button>Congregação</button>
        <button>Nº Setor</button>
        <button>Data de Nascimento</button>
        <button>Situação</button>
        <button>Naturalidade</button>
        <button>Editar</button>
        <button>Excluir</button>
        @foreach ($membros as $membro)
            <div>
                <a>{{ $membro->nome }}</a>
                <a>{{ $membro->cidade }}</a>
                <a>{{ $membro->celular }}</a>
                <a>
                    <a href="{{ route('edit', ['id' => $membro->id]) }}">
                        &#128393;
                    </a>
                </a>
                <a>
                    <form action="{{ route('destroy', ['id' => $membro->id]) }}" method="POST" id="btn-form-del">
                        @csrf
                        @method('DELETE')
                        <button>&#128465;</button>
                    </form>
                </a>
            </div>
        @endforeach
    </div>
@endsection
