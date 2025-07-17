@extends('layouts.main')

@section('title', 'Grandes nome')


@section('content')
    <h2>Grandes nomes da Microsoft</h2>

    @if ($nomes != null)
        <ul>
            <li style="color: green;">{{$nomes[0]}} || {{$ceo}}</li>
        </ul>
    @endif
@endsection