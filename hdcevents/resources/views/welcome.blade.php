@extends('layouts.main')

@section('tittle', 'HDC Events')



@section('content')

        <img src="/image/catedral.jpg" alt="imagem exemplo">
       @if (10 < 5)
            <p>A condição é true</p>
       @endif

       <p>{{$nome}}</p>

       @if ($nome == "Pedro")
            <p>O nome é Pedro</p>
       @elseif ($nome == 'Matheus')
            <p>O nome é {{$nome}} e ele tem {{$idade2}} anos e trabalha como {{$profissao}}</p>     
       @else  
            <p>O nome não é Pedro</p>
        @endif    

        @for ($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p> 
            @if ($i == 2)
              <p>O i é {{$i}}</p>
            @endif
        @endfor

        @php
            $name = "João";
            echo $name;
        @endphp

        <!--Comentario do HTML-->

        {{--Este é o comentario do blade--}}

        @foreach ($nomes as $nome)
            <p>{{$loop->index}}</p>
            <p>{{$nome}}</p>
        @endforeach
@endsection