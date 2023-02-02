{{-- @extends('templates.main')

@section('titulo', 'Alterando: ' . $membro->nome)

@section('conteudo') --}}
    <h1>Alterando membro: {{ $membro->nome }}</h1>
    <form action="{{ route('update', ['id' => $membro->id]) }}" method="post">
        @csrf
        @method('PUT')
        <legend>Cadastrar novo membro</legend>
        {{-- 5 primeiros campos do form, e que ficam acima das guias --}}
        <x-edit.campos_above_tab />

        <nav class="nav_tabs">
            <ul>
                <li>
                    {{-- Tab(Guia) Dados Cadastrais --}}
                    <x-edit.nav_tab_dados_cadastrais />
                </li>
                <li>
                    {{-- Tab(Guia) Complemento --}}
                    <x-edit.nav_tab_complemento />
                </li>
            </ul>
        </nav>

        <div class="button-actions">
            <button type="submit">&#128190; Salvar Alterações</button>
            <button>Listagem</button>
            <button id="pesquisar-membro">Pesquisar membro</button>
        </div>
        </fieldset>
        {{-- <input type="submit" value="alterar"> --}}
    </form>

{{-- Informações já cadastradas do membro selecionado --}}
    <x-informacoes_membro :membro="$membro"/>    
{{-- @endsection --}}