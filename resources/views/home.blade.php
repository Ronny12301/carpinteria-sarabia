@extends('layouts.app')

@section('title', $title)

@section('content')
    @guest
        <a href="{{ route('login') }}">
            <h1>Iniciar sesión</h1>
        </a>
    @else
        <h1>Administración</h1>
        <p>Bienvenido {{ auth()->user()->name }}</p>
        <p>¿Qué desea hacer?</p>
    @endguest
    
    @foreach ($options as $option)
    <p>
        <a href="{{ $option["link"] }}">{{ $option["name"] }}</a>
    </p>
    @endforeach

@endsection