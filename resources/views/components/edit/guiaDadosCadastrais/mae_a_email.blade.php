<div>
    <label for="mae">Mãe</label>
    <input type="text" name="mae" id="mae" required value="{{ $membro->mae }}">
</div>

<div>
    <label for="input-endereco">Endereço:</label>
    <input type="text" name="endereco" id="input-endereco" placeholder="Avenida Brasil, nº 98, Centro" required
        value="{{ $membro->endereco }}">
</div>

<div>
    <label for="numeroLar">numero do Lar</label>
    <input type="text" name="numeroLar" id="numeroLar" required value="{{ $membro->numeroLar }}">
</div>

<div>
    <label for="complementoEndereco">complementoEndereco</label>
    <input type="text" name="complementoEndereco" id="complementoEndereco" required
        value="{{ $membro->complementoEndereco }}">
</div>

<div>
    <label for="bairro">bairro</label>
    <input type="text" name="bairro" id="bairro" required value="{{ $membro->bairro }}">
</div>

<div>
    <label for="input-cidade">Cidade:</label>
    <input type="text" name="cidade" id="input-cidade" placeholder="Lages" required value="{{ $membro->cidade }}">
</div>

<div>
    {{-- selected - uf --}}
    <label for="uf">uf</label>
    <input type="text" name="uf" id="uf" required value="{{ $membro->uf }}">
</div>

<div>
    <label for="cep">cep</label>
    <input type="text" name="cep" id="cep" required value="{{ $membro->cep }}">
</div>

<div>
    <label for="celular">Telefone fixo:</label>
    <input type="tel" name="telefone" id="telefone" placeholder="049 9 8842-6048" pattern="[0-9]{4}-[0-9]{4}"
        value="{{ $membro->telefone }}">
    <small>Formato: 3222-5566</small>
</div>

<div>
    <label for="celular">Celular:</label>
    <input type="tel" name="celular" id="celular" placeholder="049 9 8842-6048"
        pattern="[0-9]{3} [0-9]{1} [0-9]{4}-[0-9]{4}" required value="{{ $membro->celular }}">
    <small>Formato: 011 9 1122-3344</small>
</div>

<div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ $membro->email }}">
</div>
