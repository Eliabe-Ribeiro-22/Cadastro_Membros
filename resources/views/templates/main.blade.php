<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Titulo da página --}}
    <title>@yield('titulo')</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
</head>

<body>
    <aside>
        <nav>
            <a href="#">Secretaria</a>
            <a href="#">Tesouraria</a>
            <a href="#">Patrimonial</a>
            <a href="#">Cadastro de Usuários</a>
            <a href="#">Configrurações</a>
        </nav>
    </aside>

    <main>
        @if (session('msg'))
            <p>{{ session('msg') }}</p>
        @endif
        @yield('conteudo')
    </main>

</body>

</html>
