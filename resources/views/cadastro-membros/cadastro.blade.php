@extends('templates.main')

@section('titulo', 'Novo Membro')

@section('conteudo')
    <h2>Cadastrar membros</h2>
    <form id="form-cadastro-membro" action="{{ route('store') }}" method="post">
        @csrf
        <fieldset>
            <legend>Cadastrar novo membro</legend>
            <div>
                <label for="codigo">Código do membro:</label>
                <input type="text" name="codigo" id="codigo" readonly disabled placeholder="0">
            </div>

            <div>
                <label for="input-nome">Nome:</label>
                <input type="text" name="nome" id="input-nome" placeholder="Eliabe Ribeiro Mota">
            </div>


            <nav class="nav_tabs">
                <ul>
                    <li>
                        {{-- Tab Dados Cadastrais --}}
                        <input type="radio" name="tabs" class="rd_tabs" id="tab-dados-cadastrais" checked>
                        <label for="tab-dados-cadastrais">Dados Cadastrais</label>
                        <div class="conteudo">
                            <div>
                                <label for="cpf">CPF(somente números):</label>
                                <input type="text" name="cpf" id="cpf" maxlength="11"
                                    placeholder="12345678998">
                            </div>
                            <div>
                                <label for="input-endereco">Endereço completo:</label>
                                <input type="text" name="endereco" id="input-endereco"
                                    placeholder="Avenida Brasil, nº 98, Centro">
                            </div>

                            <div>
                                <label for="input-cidade">Cidade:</label>
                                <input type="text" name="cidade" id="input-cidade" placeholder="Lages">
                            </div>
                            <div>
                                <label for="celular">Celular:</label>
                                <input type="tel" name="celular" id="celular" placeholder="049 98842-6048"
                                    pattern="[0-9]{3} [0-9]{1} [0-9]{4}-[0-9]{4}">
                            </div>
                        </div>
                    </li>
                    <li>
                        {{-- Tab Complemento --}}
                        <input type="radio" name="tabs" class="rd_tabs" id="tab-complemento">
                        <label for="tab-complemento">Complemento</label>
                        <div class="conteudo">
                            <div>
                                <label for="dataConversao">Data da Conversão:</label>
                                <input type="date" name="dataConversao" id="dataConversao">
                            </div>

                            <div>
                                <label for="batismoAguas">Local do Batismo em Águas:</label>
                                <input type="text" name="batismoAguas" id="batismoAguas">
                            </div>

                            <div>
                                <label for="dataBatismoAguas">Data de Batismo:</label>
                                <input type="date" name="dataBatismoAguas" id="dataBatismoAguas">
                            </div>

                            <div>
                                <label for="batismoES">Local do Batismo Espírito Santo:</label>
                                <input type="text" name="batismoES" id="batismoES">
                            </div>

                            <div>
                                <label for="dataBatismoES">Data de Batismo Espírito Santo</label>
                                <input type="date" name="dataBatismoES" id="dataBatismoES">
                            </div>

                            <div>
                                <label for="dizimista">Dizimista</label>
                                <input type="radio" name="dizimista" id="0">Não
                                <input type="radio" name="dizimista" id="1">Sim
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <div style="position: relative">
                <button type="submit">&#128190; Cadastrar</button>
                <button>Listagem</button>
                <button>Pesquisar membro</button>
            </div>

        </fieldset>
    </form>
@endsection
