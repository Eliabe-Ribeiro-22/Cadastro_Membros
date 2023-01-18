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

    {{-- Como existem alunos cadastrados, então exiba-os com FOREACH --}}
    <table class="w-1\1">
        <tr id="table-title">
            <th colspan="7" class="title-alunos" id="title-table-alunos">ADAD - Alunos
                Cadastrados:</th>
        </tr>
        <tr class="w-1\1 line-header-alunos">
            <th class="cabecalho-table">Nome</th>
            <th class="cabecalho-table">Idade</th>
            <th class="cabecalho-table">Série</th>
            <th class="cabecalho-table">Cidade</th>
            <th class="cabecalho-table">Religião</th>
            <th class="cabecalho-table">Editar</th>
            <th class="cabecalho-table" id="delete">Excluir</th>
        </tr>
        @foreach ($membros as $membro)
            <tr class="w-1\1 line-body-alunos">
                <td>{{ $membro->nome }}</td>
                <td>{{ $membro->cidade }}</td>
                <td>{{ $membro->celular }}</td>
                <td class="btn-edit-del">
                    <a href="{{ route('edit', ['id' => $membro->id]) }}">
                        &#128393;
                    </a>
                </td>
                <td class="btn-edit-del">
                    <form action="{{ route('destroy', ['id' => $membro->id]) }}" method="POST" id="btn-form-del">
                        @csrf
                        @method('DELETE')
                        <button>&#128465;</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
