<div>
    <label for="cpf">CPF(somente números):</label>
    <input type="text" name="cpf" id="cpf" maxlength="11" placeholder="12345678998" required
        value="{{ $membro->cpf }}">
</div>

<div>
    <label for="rg">RG(somente números):</label>
    <input type="text" name="rg" id="rg" maxlength="9" placeholder="111111111" required
        value="{{ $membro->rg }}">
</div>

<div>
    <label for="naturalidade">Naturalidade</label>
    <input type="text" name="naturalidade" id="naturalidade" required value="{{ $membro->naturalidade }}">
</div>

<div>
    <label for="dataNascimento">dataNascimento</label>
    {{-- <input type="text" name="dataNascimento" id="dataNascimento" required> --}}
</div>
<div>
    <label for="nacionalidade">Nacionalidade</label>
    <input type="text" name="nacionalidade" id="nacionalidade" required value="{{ $membro->nacionalidade }}">
</div>

{{-- profissão - selected --}}
<div>
    <label for="profissao">Profissão</label>
    <input type="text" name="profissao" id="profissao" required value="{{ $membro->profissao }}">
</div>

{{-- select ou radiobutton --}}
<div>
    <label for="sexo">Sexo</label>
    <input type="text" name="sexo" id="sexo" required value="{{ $membro->sexo }}">
</div>

<div>
    <label for="estadoCivil">Estado Civil</label>
    <input type="text" name="estadoCivil" id="estadoCivil" required value="{{ $membro->estadoCivil }}">
</div>

<div>
    <label for="grauInstrucao">Grau de Instrução</label>
    <input type="text" name="grauInstrucao" id="grauInstrucao" required value="{{ $membro->grauInstrucao }}">
</div>

<div>
    <label for="pai">pai:</label>
    <input type="text" name="pai" id="pai" value="{{ $membro->pai }}">
</div>
