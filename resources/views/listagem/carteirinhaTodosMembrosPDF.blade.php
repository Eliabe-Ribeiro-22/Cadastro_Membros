<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartões de Membro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        /* Quadrado que exibe os 4 cartões de membro de uma folha */
        .show-cards {
            margin: 10px 10vw;

            display: grid;
            grid-template-columns: 50% 50%;
            grid-row-gap: 35px;
        }

        .card {
            background-image: url('/assets/img/nuvens-bg-cartao.jpeg');
            background-size: cover;
            width: 32vw;
            height: 14rem;
        }

        .front {
            margin-left: 80px;
        }

        /* cabeçalho padrão da frente do cartão */
        .header-card {
            margin: 0% 4%;
            width: 92%;

            background: #ffffff;
            opacity: 0.85;
        }

        .header-card> :is(h4, p) {
            margin-top: 3px;

            text-align: center;
            overflow-wrap: break-word;
        }

        .header-card>p {
            font-size: 13px;
        }

        .header-card>h4#title {
            text-decoration: underline;
            font-weight: bold;
        }

        /* Corpo do cartão */
        .body-card {
            margin: 0 14px;
            margin-top: 13px;

            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-column-gap: 7px;
            grid-row-gap: 13px;
        }

        .body-card>span {
            height: 22px;

            display: flex;

            align-items: center;

            background: #fff;
            font-size: 16px;

            border: 0.000001mm solid #c2c2c2;
            border-radius: 2px;
        }

        .body-card> :is(span.nome, span.congregation) {
            grid-column: span 4;
        }

        .body-card>span.mission {
            grid-column: span 3;
        }

        .body-card>:is(span.baptism-date, span.emission) {
            grid-column: span 2;
        }
    </style>
</head>

<body>
    <main>
        <div class="show-cards">
            @foreach ($membros as $membro)
                <div class="card front">
                    <div class="header-card">
                        <h4>IGREJA EVANGÉLICA ASSEMBLEIA DE DEUS
                        </h4>
                        <p>
                            RUA GERONIMO XAVIER DE OLIVEIRA, 230
                            <br>
                            CAMPO BELO DO SUL - SC - (49) 3249-1036
                        </p>
                        <h4 id="title">Cartão de Membro</h4>
                    </div>

                    <div class="body-card">
                        <span class="nome">Nome: <b>{{ $membro->nome }}</b></span>
                        <span class="mission">Cargo: <b>{{ $membro->situacao }}</b></span>
                        <span>ID: <b>{{ $membro->id }}</b></span>
                        <span class="baptism-date">Dt Batismo: <b>{{ $membro->dataBatismoAguas }}</b></span>
                        <span class="emission">Emissão: <b>{{ date('d/m/Y') }}</b></span>
                        <span class="congregation">Congregação: <b>{{ $membro->congregacao }}</b></span>

                    </div>
                </div>
                <div class="card back">

                </div>
            @endforeach
        </div>
        {{-- Objetivo: --}}

        {{--  8 vezes = 4 membros, pois é frente verso 
      aí quebra página
      e faz mais 8 vezes
Esse processo vai se repetir até que todos os membros sejam impressos
{{-- CODE: --}}
        {{-- 
    foreach($membros as $membro){
        // for(8 membro)
        
        for ($i = 0; $i < 7; $i++){
            escreve os dados do membro no card-> frente e verso
        }
        
        Quebrar para ir a nova página
    }
    --}}
    </main>

</body>

</html>
