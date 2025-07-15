<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('tittle')</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <header><h1>@yield('pagina')</h1></header>
    @yield('content') 
    <footer>
        <p>&copy;Todos os direito reservado a <a href="#">{{$nomes_func['1']}}</a></p>
    </footer>
    </body>
</html>
