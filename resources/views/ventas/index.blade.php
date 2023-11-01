@extends('layouts.app')

@section('title', 'Ventas')

@section('content')
    ola mostrar Ventas

        <h1>Control de Ventas</h1>

        <p>
            <a href="{{ route('ventas.create') }}">Registrar venta</a>
        </p>

    @foreach ($ventas as $venta)
    <article >
        
    </article>
    <br>
    @endforeach

@endsection