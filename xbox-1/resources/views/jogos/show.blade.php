@extends('layouts.main')

@section('title', 'Xbox serviços')

@section('content')
<section id="receitas">
    <article id="recipe">
        <h1> {{ $jogo->nome }} </h1>
      
        <h2>Mais acerca do jogo</h2>
        <p>
            {{$jogo->sobre}}
        </p>
    </article>

    <article id="video">
        <div id="jogo">
          <img src="/img/jogos/{{ $jogo->image }}" alt="{{ $jogo->nome }}">  
        </div>
        <div>
            <h3>O evento conta com</h3>
            <ul>
                @foreach ($jogo->items as $item)
                    <li> {{ $item }} </li>
                @endforeach
            </ul>
        </div>
    </article>
</section>   
@endsection