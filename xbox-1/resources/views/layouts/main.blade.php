<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <!--Header-->
        <header>
        <div class="logo">
            <a href="/">
                <img src="/img/20336203-xbox-logotipo-xbox-icone-livre-gratis-vetor.jpg" alt="logo do xbox" width="200px" id="logo-img">
            </a>
        </div>
        <div style="color: white;">
            @yield('pagina')
        </div>
        <nav id="menu">
            <ul>
                <li><a href="/jogos">Jogos</a></li>
                <li><a href="/jogos/create">Cadastro</a></li>
                <li><a href="/jogos/servicos">Serviços</a></li>
               
            </ul>
        </nav>
    </header>
        @yield('content')
    <!--Footer-->
    <footer>
        <p>&copy;Xbox 2025</p>
    </footer> 
    </body>
</html>
