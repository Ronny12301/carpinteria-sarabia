@extends('layouts.app')

@section('title', 'Nueva Contraseña')

@section('content')
@include('layouts.header', ['title' => 'Nueva Contraseña'])

    <form action="/XD">
        <label for="password">Nueva contraseña</label>
        <input class="border" type="password" name="password">

        <label for="confirm-password">Confirmar contraseña</label>
        <input class="border" type="password" name="confirm-password">

        <button type="submit">Guardar Contraseña</button>
    </form>

@endsection