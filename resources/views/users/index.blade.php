@extends('layouts.plantilla')

@section('title', '')

@section ('content')

    <h1> <style></style>Registros</h1>
    
    <a href="{{ route('users.create') }}">Crear Usuario</a>

    <ul>
        

        {{-- @foreach ($users as $user)
 
        <li>
            <a href="{{ route('users.show', $user->id) }}"> {{ $user->name }}</a>
        </li>
        @endforeach
    </ul> --}}

    {{-- {{ $users->links()}} --}}

    @endsection
