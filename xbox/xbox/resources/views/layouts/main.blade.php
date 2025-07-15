<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      
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
                <li><a href="/consoles">Consoles</a></li>
                <li><a href="/jogos">Jogos</a></li>
                <li><a href="/servicos">Serviços</a></li>
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