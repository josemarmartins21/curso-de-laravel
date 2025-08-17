@extends('layouts.main')
  @section('tittle', 'Triz online')     
  @section('pagina', 'Triz online')     
    @section('content') 
        <main>
        <h2>Nome dos nossos funcionarios</h2>
          @foreach ($events as $event)
            <p>{{ $event->title }} -- {{ $event->descricao }} {{ $event->descricao }} -- {{ $event->city }}</p>
          @endforeach
      </main>
    @endsection