<div>
    
    <label for="testezinho">Código do membro:</label>
    <input type="text" name="testezinho" id="testezinho" readonly disabled value="{{$membro->id}}">
</div>

<div>
    <label for="input-nome">Nome:</label>
    <input type="text" name="nome" id="input-nome" required value="{{$membro->nome}}">
</div>

<div>
    <label for="situacao">Situação:</label>
    <input type="text" name="situacao" id="situacao" required  value="{{$membro->situacao}}">
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
    <input type="text" name="congregacao" id="congregacao" required  value="{{$membro->congregacao}}">
</div>
<div>
    <label for="setor">Setor: </label>
    <input type="number" name="setor" id="setor" max="4" min="1" required  value="{{$membro->setor}}">
</div>
