<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .show-cards {
            margin: 10px 10vw;
            padding: 0;
            
            width: 80vw;
            background: yellow;

            display: grid;
            grid-template-columns: 50% 50%;
            grid-row-gap: 30px;
        }

        .card {
            margin: 0;
            padding: 0;
            
            background-image: url("https://www.gov.br/aeb/pt-br/assuntos/noticias/imagens-de-satelite-auxiliam-na-analisa-de-evolucao-das-nuvens/nuvens-2.jpeg");
            background-size: cover;
            width: 32vw;
            height: 13rem;
        }

        .front{
            margin-left: 80px;
        }

        .header-card{
            margin-top: 3px;
            text-align: center;
        }

        .header-card > p {
            font-size: 13px;
        }
        .header-card > h4#title{
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <main>
        <div class="show-cards">
            @for ($i = 0; $i < 7; $i++)
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
                </div>
                <div class="card back">
                    ok
                    <div>teste</div>
                    {{ $i }}
                </div>
            @endfor
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
        
        for(i=1; i < 8; i++){
            escreve os dados do membro no card-> frente e verso
        }
        break page
    }
    --}}
    </main>

</body>

</html>
