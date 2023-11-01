@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
    <h1>Iniciar Sesión</h1>

    <form action="{{ route('signin') }}" method="post">
        @csrf
        <label for="name">Usuario</label> <br>
        <input type="name" name="name" id="name" placeholder="Usuario"> <br>
        @error('name')
            <small>{{ $message }}</small> <br>
        @enderror

        <label for="password">Contraseña</label> <br>
        <input type="password" name="password" id="password" placeholder="Contraseña"> <br>
        @error('password')
            <small>{{ $message }}</small> <br>
        @enderror

        <button type="submit">Iniciar sesión</button>
    </form>
    
@endsection