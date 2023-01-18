@extends('templates.main')

@section('titulo', 'Novo Membros')

@section('conteudo')
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
@endsection