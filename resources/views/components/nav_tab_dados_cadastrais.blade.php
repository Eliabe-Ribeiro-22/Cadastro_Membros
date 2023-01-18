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
        <label for="input-endereco">Endereço completo:</label>
        <input type="text" name="endereco" id="input-endereco" placeholder="Avenida Brasil, nº 98, Centro">
    </div>

    <div>
        <label for="input-cidade">Cidade:</label>
        <input type="text" name="cidade" id="input-cidade" placeholder="Lages">
    </div>
    <div>
        <label for="celular">Celular:</label>
        <input type="tel" name="celular" id="celular" placeholder="049 9 8842-6048"
            pattern="[0-9]{3} [0-9]{1} [0-9]{4}-[0-9]{4}">
        <small>Formato: 011 9 1122-3344</small>
    </div>
</div>