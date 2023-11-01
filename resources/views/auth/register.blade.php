@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
    <h1>Registrarse</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf
        
        <label for="name">Usuario</label> <br>
        <input type="name" name="name" 
            id="name" placeholder="Usuario" 
            value="{{ old('name') }}"
        > <br>
        @error('name')
            <small>{{ $message }}</small> <br>
        @enderror

        <label for="email">Correo</label> <br>
        <input type="email" name="email" 
            id="email" placeholder="correo@example.com"
            value="{{ old('email') }}"
        > <br>
        @error('email')
            <small>{{ $message }}</small> <br>
        @enderror

        <label for="password">Contraseña</label> <br>
        <input type="password" name="password" 
            id="password" placeholder="Contraseña"
        > <br>
        @error('password')
            <small>{{ $message }}</small> <br>
        @enderror

        <label for="confirm-password">Confrimar contraseña</label> <br>
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirmar contraseña"> <br>

        <button type="submit">Registrarse</button>
    </form>

    <a href="{{ route('login') }}">
        ¿Ya tienes una cuenta? Inicia Sesión
    </a>
    
@endsection