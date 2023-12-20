@extends('layouts.app')

@section('title', 'Nueva Contraseña')

@section('content')
@include('layouts.header', ['title' => 'Nueva Contraseña'])

    <form action="{{ route() }}">
        <label for="password">Nueva contraseña</label>
        <input type="password" name="password">

        <label for="confirm-password">Confirmar contraseña</label>
        <input type="password" name="confirm-password">
    </form>

@endsection