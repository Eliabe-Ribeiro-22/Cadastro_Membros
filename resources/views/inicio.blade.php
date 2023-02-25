@extends('templates.main')

@section('titulo', 'Cadastro de Membros')

@section('conteudo')
    <h1 id="inicion-title">SCI - Sistema de Controle para Igreja</h1>
    <h2 id="inicio-subtitle">Secretaria</h2>
    <a href="{{ route('create') }}" class="btn-novo-membro">Novo Membro</a>

    <a href="{{ route('carteirinhas') }}" class="btn-novo-membro">Carteiras de Membro</a>
    <form action="{{ route('show', ['id' => '3']) }}" method="post" id="form-pesquisar-membro">
        {{-- Corrigir este form, para que quando o usuário digitar e apertar em enviar, seja buscado pelo nome dele e não pelo ID --}}
        @csrf
        <label for="pesquisar-membro">Digite o nome do membro que deseja pesquisar:</label>
        <input type="search" name="pesquisar-membro" id="pesquisar-membro">
        <input type="submit" value="pesquisar">
    </form>

    {{-- Exibir alunos cadastrados, utilizando diretiva @foreach --}}
    <h4>Membros Cadastrados:</h4>
    <div id="exibir-membros">
        <button id="nome">Nome</button>
        <button>Congregação</button>
        <button>Nº Setor</button>
        <button>Data de Nascimento</button>
        <button>Situação</button>
        <button>Celular</button>
        <button>Editar</button>
        <button>Excluir</button>

        @if (!$membros || count($membros) <= 0)
            <a>Não há membros cadastrados!</a>
            <a href="{{ route('create') }}">Cadastre um agora mesmo</a>
        @else
            @foreach ($membros as $membro)
                <a>{{ $membro->nome }}</a>
                <a>{{ $membro->cidade }}</a>
                <a>{{ $membro->setor }}</a>
                <a>{{ date('d/m/Y', strtotime($membro->dataNascimento)) }}</a>
                <a>{{ $membro->situacao }}</a>
                <a>
                    @if ($membro->celular)
                        {{ $membro->celular }}
                    @else
                        Não informado
                    @endif
                </a>
                <a href="{{ route('edit', ['id' => $membro->id]) }}">
                    &#128393;
                </a>
                <a>
                    <form action="{{ route('destroy', ['id' => $membro->id]) }}" method="POST" id="btn-form-del">
                        @csrf
                        @method('DELETE')
                        <button>&#128465;</button>
                    </form>
                </a>
            @endforeach
        @endif
    </div>
@endsection
