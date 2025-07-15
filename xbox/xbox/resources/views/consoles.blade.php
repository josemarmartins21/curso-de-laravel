@extends('layouts.main')

@section('title', 'Consoles')

@section('content')
    <!--Consoles do Xbox-->
    <section id="consoles-xbox">
        @if ($busca != null)
            <h1 class="titulo">Consoles <strong>{{$busca}}</strong></h1>
        @endif
        <div id="consoles">
            <div class="console" id="c1">
                    <div class="img">
                        <img src="/img/xbox.jpg" alt="imagem do xbox classico" title="Xbox" class="pequena-c">
                    </div>
            </div>
            <div class="console" id="c2">
                    <div class="img">
                        <img src="/img/xbox360.png" alt="imagem do xbox 360" title="Xbox 360" class="pequena-c">
                    </div>
            </div>
            <div class="console" id="c3">
                    <div class="img">
                        <img src="/img/xbox1.png" alt="imagem do xbox one" title="Xbox one" class="pequena-c">
                    </div>
            </div>
            <div class="console" id="c4">
                    <div class="img">
                        <img src="/img/xboxs.png" alt="imagem do xbox series s" title="Xbox series s" class="pequena-c">
                    </div>
            </div>
            <div class="console" id="c5">
                    <div class="img">
                        <img src="/img/xboxx.jpg" alt="imagem do xbox series s" title="Xbox series x" class="pequena-c">
                    </div>
            </div>
        </div>
    </section>
@endsection