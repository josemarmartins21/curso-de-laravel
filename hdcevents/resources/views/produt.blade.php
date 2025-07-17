@extends('layouts.main')

@section('tittle', 'Produto')

@section('content')
    @if ($id != '')
     <p>Id do produto {{$id}}</p>
   @endif
@endsection