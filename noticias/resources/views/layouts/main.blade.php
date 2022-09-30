<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="/js/script.js"></script>

    <link rel="stylesheet" href="/css/style.css">
    <!-- Bootstrap -->


</head>

<body>
    <header>

        <nav class="navbar">
            <h1>Portal de Notícias</h1>
            <div>
                <a href="/" class="btn btn-secondary">Ir para o portal</a>
                <a href="/news/create" class="btn btn-secondary">Cadastrar Notícia</a>

            </div>
        </nav>

    </header>
    <div class="container-fluid">
        <div class="row"></div>
    </div>

    @yield('content')

</body>

</html>