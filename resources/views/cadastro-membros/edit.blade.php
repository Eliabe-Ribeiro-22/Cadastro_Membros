@extends('templates.main')

@section('titulo', 'Alterando: ' . $membro->nome)

@section('conteudo')
    <h1>Alterando membro: {{ $membro->nome }}</h1>
    <form id="form-cadastro-membro" action="{{ route('update', ['id' => $membro->id]) }}" method="post">
        @csrf
        @method('PUT')
        <fieldset>
            <legend>Cadastrar novo membro</legend>
            {{-- 5 primeiros campos do form, e que ficam acima das guias --}}
            <x-edit.nav_tab_dados_acima :membro="$membro"/>

            <nav class="nav_tabs">
                <ul>
                    <li>
                        {{-- Tab(Guia) Dados Cadastrais --}}
                        <x-edit.nav_tab_dados_cadastrais :membro="$membro"/>
                    </li>
                    <li>
                        {{-- Tab(Guia) Complemento --}}
                        <x-edit.nav_tab_complemento :membro="$membro"/>
                    </li>
                </ul>
            </nav>

            <div class="button-actions">
                <button type="submit">&#128190; Salvar Alterações</button>
                <button>Listagem</button>
                <button id="go_to-pesquisar-membro">Pesquisar membro</button>
            </div>
        </fieldset>
        {{-- <input type="submit" value="alterar"> --}}
    </form>
    {{-- problema de styles: o fieldset deveria aumentar o tanto das guias --}}
    {{-- Informações já cadastradas do membro selecionado --}}
    <x-edit.informacoes_membro :membro="$membro" />
@endsection
