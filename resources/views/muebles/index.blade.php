@extends('layouts.app')

@section('title', 'Muebles')

@section('content')
<br>
    ola mostrar muebles
    @auth
        <h1>Administrar Muebles</h1>

        <p>
            <a href="{{ route('muebles.create') }}">Agregar mueble</a>
        </p>

    @else
        <h1>Lista de Muebles</h1>
    @endauth

    @foreach ($muebles as $mueble)
    <article >
        <h3>{{ $mueble->nombre }}</h3>
        <p>{{ $mueble->descripcion }}</p>
        <p><strong>Tipo:</strong> {{ $mueble->tipo }}</p>
        <p><strong>Precio:</strong> {{ $mueble->precio }}</p>
        <img src="{{ $mueble->imagen ?? img('null.webp') }}" alt="{{ $mueble->nombre }}" style="height: 200px">
    </article>
    <br>
    @endforeach
@endsection