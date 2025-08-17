<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('tittle')</title>
        <!--CSS da aplicação-->
        <!--Para a fonte do goolge-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto" rel="stylesheet">
        <!--Para CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/image/qos-logo-sem-fundo.png" alt="logotipo">
                    </a>
                    <ul class="navbar-nav">
                        @auth {{-- Links para quem está autenticado nos sistema --}}
                            <li class="nav-item">
                                <a href="/produtos/adicionar" class="nav-link">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/events/create" class="nav-link">Criar eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <form action="/logout" method="post">
                                    @csrf
                                    <a href="/logout" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">
                                        Sair
                                    </a>
                                </form>
                            </li>
                        @endauth
                        @guest  {{-- Links para quem não está autenticado --}}
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Entrar</a>
                            </li>
                                <li class="nav-item">
                                <a href="/events/create" class="nav-link">Criar eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Registrar</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
   
    <footer>
        <p>HDC events &copy;2025</p>
    </footer>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
