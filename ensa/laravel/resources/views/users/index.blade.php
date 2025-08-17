@extends('master')


@section('content')
    <h2>Users</h2>

    <ul>
        @foreach ($users as $user)
                <li> {{ $user->nome }} | <a href="{{ route('users.edit', ['u' => $user->id]) }}">Edit</a> | <a href="#">Delete</a> 
        @endforeach
    </ul>
@endsection