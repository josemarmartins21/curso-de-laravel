@extends('layouts.main')

@section('title', 'Jogos Xbox')

@section('content')
 <!-- Secção de Jogos -->
<section id="jogos">
        <h1 class="titulo">Jogos</h1>
        @if (session('msg'))
        <p>
            {{ session('msg') }}
        </p>
        @endif
        <div id="container">
            @foreach ($jogos as $jogo)
                <div class="jogo">
                    <div class="img">
                        <img src="/img/jogos/{{ $jogo->image }}" alt="imagem do jogo Halo" class="pequena">
                    </div>
                
                    <h2>{{ $jogo->nome }}</h2>
                    <p>
                        {{ $jogo->descricao }}
                    </p>
                </div>
            @endforeach
            </div>
    </section>
@endsection