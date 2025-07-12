@extends('layouts.main')
  @section('tittle', 'Triz online')     
  @section('pagina', 'Triz online')     
    @section('content') 
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
        <a href="/nossahistoria">Nossa historia</a>
        <article>
          @foreach ($artigos as $artigo => $key)

          @if ($artigo[0])
          <div class="item">
            <h2>{{$artigo}}</h2>
            <p>{{$key}}</p>
          </div>
          @endif
          @endforeach
        </article>
      </main>
    @endsection