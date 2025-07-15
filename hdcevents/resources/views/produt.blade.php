@extends('layouts.main')

@section('tittle', 'Produto')

@section('content')

@if ($id != null)
    <p>Exibindo produto {{$id}}</p>
@endif

@endsection