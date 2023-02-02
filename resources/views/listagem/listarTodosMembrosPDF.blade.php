<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Membros</title>
    <style>

    </style>
</head>

<body>
    <h1>Listagem de Membros</h1>
    @foreach ($membros as $membro)
    <table>
        <tbody>
            <tr>{{-- Campos acima das guias --}}
                <h2>{{ $membro->nome }}</h2>
                <td>{{ $membro->situacao }}</td>
            </tr>
                <td>{{ $membro->congregacao }}</td>
                <td>{{ $membro->setor }}</td>
        
                {{-- Guia dados cadastrais --}}
                <td>{{ $membro->cpf }}</td>
                <td>{{ $membro->rg }}</td>
                <td>{{ $membro->naturalidade }}</td>
                <td>{{ $membro->nacionalidade }}</td>
                <td>{{ $membro->profissao }}</td>
                <td>{{ $membro->sexo }}</td>
                <td>{{ $membro->estadoCivil }}</td>
                <td>{{ $membro->grauInstrucao }}</td>
                <td>{{ $membro->pai }}</td>
                <td>{{ $membro->mae }}</td>
                <td>{{ $membro->endereco }}</td>
                <td>{{ $membro->numeroLar }}</td>
                <td>{{ $membro->complementoEndereco }}</td>
                <td>{{ $membro->bairro }}</td>
                <td>{{ $membro->cidade }}</td>
                <td>{{ $membro->uf }}</td>
                <td>{{ $membro->cep }}</td>
                <td>{{ $membro->telefone }}</td>
                <td>{{ $membro->celular }}</td>
                <td>{{ $membro->email }}</td>
        
                {{-- Guia complemento --}}
                <td>{{ $membro->dataConversao }}</td>
                <td>{{ $membro->batismoAguas }}</td>
                <td>{{ $membro->dataBatismoAguas }}</td>
                <td>{{ $membro->batismoES }}</td>
                <td>{{ $membro->dataBatismoES }}</td>
                <td>{{ $membro->observacoes }}</td>
        
        </tbody>
    </table>
        
        <br><br>
    @endforeach
</body>

</html>
