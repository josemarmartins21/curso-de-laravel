<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
            
              <header> <h1>Bem vindos ao mundo da Triz</h1></header>
              
              <main>
              <h2>Nome dos nossos funcionarios</h2>
              @foreach ($nomes_func as $nome)
                  <p>
                    <ul>
                      @if ($nome == 'Beatriz Isabel')
                        <li class="bea">Nossa Ceo {{$nome}}</li>
                      @endif
                      <li>{{$nome}}</li>
                    </ul>
                  </p>
              @endforeach
              <a href="/kitutes">Nossos kitutes</a>
              <a href="/contactos">Contactos</a>
            </main>
            <footer>
              <p>&copy;Todos os direito reservado a <a href="#">{{$nomes_func['1']}}</a></p>
            </footer>
    </body>
</html>
