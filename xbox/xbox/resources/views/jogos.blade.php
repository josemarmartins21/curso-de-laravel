@extends('layouts.main')

@section('title', 'Jogos Xbox')

@section('content')
 <!--Secção de Jogos-->
    <section id="jogos">
        @if ($id != '')
            <h1 class="titulo">Jogos {{$id}}</h1>
        @endif
        <div id="container">
            <div class="jogo">
                <div class="img">
                    <img src="/img/halo.jpg" alt="imagem do jogo Halo" class="pequena">
                </div>
                <h2>Halo</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae expedita magnam quia obcaecati adipisci in sequi amet id, delectus, pariatur doloremque iste vel iure aliquam repudiandae architecto? Neque, in magni.
                </p>
            </div>
            <div class="jogo">
                <div class="img">
                    <img src="/img/avowed.jpg" alt="imagem do jogo avowed" class="pequena">
                </div>
                <h2>Avowed</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae expedita magnam quia obcaecati adipisci in sequi amet id, delectus, pariatur doloremque iste vel iure aliquam repudiandae architecto? Neque, in magni.
                </p>
            </div>
            <div class="jogo">
                <div class="img">
                    <img src="/img/gears.jpg" alt="imagem do jogo Gears" class="pequena">
                </div>
                <h2>Gears of war</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae expedita magnam quia obcaecati adipisci in sequi amet id, delectus, pariatur doloremque iste vel iure aliquam repudiandae architecto? Neque, in magni.
                </p>
            </div>
            <div class="jogo">
                <div class="img">
                    <img src="/img/forza-horizon.jpg" alt="imagem do jogo forza horizon" class="pequena">
                </div>
                <h2>Forza Horizon</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae expedita magnam quia obcaecati adipisci in sequi amet id, delectus, pariatur doloremque iste vel iure aliquam repudiandae architecto? Neque, in magni.
                </p>
            </div>
        </div>
        
@endsection