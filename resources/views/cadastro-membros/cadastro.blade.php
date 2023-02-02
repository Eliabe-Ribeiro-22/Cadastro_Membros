@extends('templates.main')

@section('titulo', 'Novo Membro')
@section('conteudo')
    <h2>Cadastrar membros</h2>
    <form id="form-cadastro-membro" action="{{ route('store') }}" method="post">
        @csrf
        <fieldset>
            <legend>Cadastrar novo membro</legend>
            {{-- 5 primeiros campos do form, e que ficam acima das guias --}}
            <x-campos_above_tab/>
            
            <nav class="nav_tabs">
                <ul>
                    <li>
                        {{-- Tab(Guia) Dados Cadastrais --}}
                        <x-nav_tab_dados_cadastrais/>
                    </li>
                    <li>
                        {{-- Tab(Guia) Complemento --}}
                        <x-nav_tab_complemento/>
                    </li>
                </ul>
            </nav>

            <div class="button-actions">
                <button type="submit">&#128190; Cadastrar</button>
                <button>Listagem</button>
                <button id="go_to-pesquisar-membro">Pesquisar membro</button>
            </div>
        </fieldset>
    </form>
@endsection