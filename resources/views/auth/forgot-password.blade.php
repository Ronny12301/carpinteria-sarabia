@extends('layouts.app')

@section('title', 'Recuperar Contraseña')

@section('content')
@include('layouts.header', ['title' => 'Recuperar Contraseña'])

{{-- para ver la de restaurar la contraseña vete a /reset-password --}}

<form action="{{ route('reset-password') }}" method="get"></form>

    <label for="name">Ingrese su correo o nombre de usuario</label>
    <input name="name" type="text">

    <button>Enviar</button>

@endsection