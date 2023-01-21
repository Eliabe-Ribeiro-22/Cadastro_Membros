<div>
    <label for="codigo">Código do membro:</label>
    <input type="text" name="codigo" id="codigo" readonly disabled placeholder="0">
</div>

<div>
    <label for="input-nome">Nome:</label>
    <input type="text" name="nome" id="input-nome" placeholder="Eliabe Ribeiro Mota">
</div>

<div>
    <label for="situacao">Situação:</label>
    <input type="text" name="situacao" id="situacao">
    {{-- <select name="situacao" id="situacao">
        <option value="0">Membro Ativo</option>
        <option value="1">Congregado Ativo</option>
        <option value="2">Disciplinado</option>
        <option value="3">Desligado</option>
        <option value="4">Mudou-se de igreja</option>
        <option value="5">Óbito</option>
    </select> --}}
</div>

<div>
    {{-- Selected --}}
    <label for="congregacao">Congregação: </label>
    <input type="text" name="congregacao" id="congregacao">
</div>
<div>
    <label for="setor">Setor: </label>
    <input type="number" name="setor" id="setor" max="4" min="1">
</div>