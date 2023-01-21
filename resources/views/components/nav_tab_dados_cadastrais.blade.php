{{-- Tab Dados Cadastrais --}}
<input type="radio" name="tabs" class="rd_tabs" id="tab-dados-cadastrais" checked>
<label for="tab-dados-cadastrais">Dados Cadastrais</label>
<div class="conteudo">
    <div>
        <label for="cpf">CPF(somente números):</label>
        <input type="text" name="cpf" id="cpf" maxlength="11" placeholder="12345678998">
    </div>

    <div>
        <label for="rg">RG(somente números):</label>
        <input type="text" name="rg" id="rg" maxlength="9" placeholder="111111111">
    </div>

    <div>
        <label for="naturalidade">Naturalidade</label>
        <input type="text" name="naturalidade" id="naturalidade">
    </div>

    <div>
        <label for="nacionalidade">Nacionalidade</label>
        <input type="text" name="nacionalidade" id="nacionalidade">
    </div>

    {{-- profissão - selected --}}
    <div>
        <label for="profissao">Profissão</label>
        <input type="text" name="profissao" id="profissao">
    </div>

    {{-- select ou radiobutton --}}
    <div>
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" id="sexo">
    </div>

    <div>
        <label for="estadoCivil">Estado Civil</label>
        <input type="text" name="estadoCivil" id="estadoCivil">
    </div>

    <div>
        <label for="grauInstrucao">Grau de Instrução</label>
        <input type="text" name="grauInstrucao" id="grauInstrucao">
    </div>

    <div>
        <label for="pai">pai:</label>
        <input type="text" name="pai" id="pai">
    </div>

    <div>
        <label for="mae">Mãe</label>
        <input type="text" name="mae" id="mae">
    </div>

    <div>
        <label for="input-endereco">Endereço:</label>
        <input type="text" name="endereco" id="input-endereco" placeholder="Avenida Brasil, nº 98, Centro">
    </div>

    <div>
        <label for="numeroLar">numero do Lar</label>
        <input type="text" name="numeroLar" id="numeroLar">
    </div>

    <div>
        <label for="complementoEndereco">complementoEndereco</label>
        <input type="text" name="complementoEndereco" id="complementoEndereco">
    </div>

    <div>
        <label for="bairro">bairro</label>
        <input type="text" name="bairro" id="bairro">
    </div>

    <div>
        <label for="input-cidade">Cidade:</label>
        <input type="text" name="cidade" id="input-cidade" placeholder="Lages">
    </div>

    <div>
        {{-- selected - uf --}}
        <label for="uf">uf</label>
        <input type="text" name="uf" id="uf">
    </div>

    <div>
        <label for="cep">cep</label>
        <input type="text" name="cep" id="cep">
    </div>

    <div>
        <label for="celular">Telefone fixo:</label>
        <input type="tel" name="celular" id="celular" placeholder="049 9 8842-6048" pattern="[0-9]{4}-[0-9]{4}">
        <small>Formato: 3222-5566</small>
    </div>

    <div>
        <label for="celular">Celular:</label>
        <input type="tel" name="celular" id="celular" placeholder="049 9 8842-6048"
            pattern="[0-9]{3} [0-9]{1} [0-9]{4}-[0-9]{4}">
        <small>Formato: 011 9 1122-3344</small>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>
</div>
