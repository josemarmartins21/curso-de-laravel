@extends('master')


@section('content')
    <form action="" method="post">
        @csrf
        <input type="hidden" name="__method" value="PUT">
        <input type="text" name="nome" value="{{ $user->nome }}"> <br>
        <input type="text" name="nacionalidade" value="{{ $user->nacionalidade }}"> <br>
        <input type="text" name="data_nasc" value="{{ $user->data_nasc }}">
        <input type="submit" value="Enviar">
    </form>

@endsection

