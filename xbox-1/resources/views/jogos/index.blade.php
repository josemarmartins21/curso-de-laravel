@extends('layouts.main')

@section('title', 'Jogos Xbox')

@section('content')
 <!-- Secção de Jogos -->
<section id="jogos">
        <h1 class="titulo">Jogos</h1>
        
        <p>
         
        </p>
        <div id="container">
                @foreach ($jogos as $jogo)
                <div class="jogo">
                    <div class="img">
                        <img src="/img/jogos/{{ $jogo->image }}" alt="imagem do jogo Halo" class="pequena">
                    </div>
                
                    <h2>{{ $jogo->nome }}</h2>
                    <p>
                     {{ $jogo->sobre }}
                    </p>
                    <p> {{ date('d/m/y', strtotime($jogo->date)) }} </p>
                    <a href="/jogos/{{ $jogo->id }}" id="ver_mais">Ver mais sobre o jogo</a>
                </div>
            @endforeach
            </div>
            @if (count($jogos) == 0)
                <p>Nenhum jogo adicionado!</p>
            @endif
    </section>
@endsection