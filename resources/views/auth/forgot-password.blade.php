@extends('layouts.app')

@section('title', 'Recuperar Contraseña')

@section('content')
@include('layouts.header', ['title' => 'Recuperar Contraseña'])

<form action="{{ route('') }}" method="post"></form>

    <label for="name">Ingrese su correo o nombre de usuario</label>
    <input name="name" type="text">

    <button>Enviar</button>

@endsection