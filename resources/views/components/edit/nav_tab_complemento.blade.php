{{-- Tab Complemento --}}
<input type="radio" name="tabs" class="rd_tabs" id="tab-complemento" />
<label for="tab-complemento">Complemento</label>
<div class="conteudo">
    <div>
        <label for="dataConversao">Data da Conversão:</label>
        <input type="date" name="dataConversao" id="dataConversao" value="{{ $membro->dataConversao }}">
    </div>

    <div>
        <label for="batismoAguas">Local do Batismo em Águas:</label>
        <input type="text" name="batismoAguas" id="batismoAguas" value="{{ $membro->batismoAguas }}">
    </div>

    <div>
        <label for="dataBatismoAguas">Data de
            Batismo:</label>
        <input type="date" name="dataBatismoAguas" id="dataBatismoAguas" value="{{ $membro->dataBatismoAguas }}">
    </div>

    <div>
        <label for="batismoES">Local do
            Batismo Espírito Santo:</label>
        <input type="text" name="batismoES" id="batismoES" value="{{ $membro->batismoES }}">
    </div>

    <div>
        <label for="dataBatismoES">Data de Batismo
            Espírito Santo</label>
        <input type="date" name="dataBatismoES" id="dataBatismoES" value="{{ $membro->dataBatismoES }}">
    </div>

    <div>
        <label for="dizimista">Dizimista</label>
        {{-- <input type="radio" name="dizimista" id="0">Não
        <input type="radio" name="dizimista" id="1">Sim --}}
    </div>

    <div>
        <label for="observacoes">Observações: </label>
        <textarea name="observacoes" id="observacoes" cols="30" rows="10"></textarea>
    </div>
</div>
