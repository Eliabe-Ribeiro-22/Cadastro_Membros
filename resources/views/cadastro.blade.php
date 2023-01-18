<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Membros</title>
</head>

<body>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="cpf">CPF(somente números):</label>
        <input type="text" name="cpf" id="cpf" maxlength="11">

        <label for="endereco">Endereço completo:</label>
        <input type="text" name="endereco" id="endereco">
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade">

        <label for="celular">Celular:</label>
        <input type="tel" name="celular" id="celular" placeholder="049 98842-6048"
            pattern="[0-9]{3} [0-9]{1} [0-9]{4}-[0-9]{4}">
        <input type="submit" value="enviar">
    </form>
    <br>
    <br>

    <form action="{{ route('show', ['id' => '2']) }}" method="post">
        @csrf
        <label for="pesquisar-membro">Consultar membro:</label>
        <input type="search" name="pesquisar-membro" id="pesquisar-membro">
        <input type="submit" value="pesquisar">
    </form>
    @foreach ($membros as $membro)
        <h2>{{ $membro->nome }}</h2>
        <h3>{{ $membro->cpf }}</h3>
        <h3>{{ $membro->endereco }}</h3>
        <h3>{{ $membro->cidade }}</h3>
        <h3>{{ $membro->celular }}</h3>
        <button>Editar</button>
        <button>Excluir</button>
        <button>{{ $membro->id }}</button>
        <form action="{{ route('show', ['id' => $membro->id]) }}" method="post">
            @csrf
            <input type="submit" value="Ver outras informações">
        </form>
        
        <br>
        <br>
    @endforeach


</body>

</html>
