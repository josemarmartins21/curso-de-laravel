@extends('layouts.main')

@section('title', 'Usuarios')

@section('content')
    <div class="card-usuarios">
    @foreach ($usuarios as $usuario)
        <div class="card-user">
            <h3>{{$usuario->nome}}</h3>
            <p>
                {{ $usuario->descricao}}
            </p>
            <p><span>Data de nascimento:</span> {{ $usuario->nasc}}</p>
        </div>
    @endforeach
    </div>
@endsection