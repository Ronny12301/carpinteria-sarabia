@extends('layouts.app')

@section('title', 'Nueva Contraseña')

@section('content')
  @include('layouts.header', ['title' => 'Nueva Contraseña'])

  <body class="font-principal space-x-0 space-y-12">

    <div class="flex">

      <div class="sm:w-3/5 fixed h-screen bg-cover bg-no-repeat bg-left bg-fondo-reset"> </div>

      <div class="w-screen sm:w-2/5 ml-auto">
        <div class="bg-cafe-sarabia text-white text-center flex flex-col">
          <h1 class="pt-8 pb-10 text-3xl m-4">Ingrese su nueva contraseña</h1>

        </div>

        <form action="/XD" class="flex flex-col items-center justify-center m-6">

          <label for="password">Nueva contraseña</label>
          <input class="text-box-sarabia" type="password" name="password">

          <label for="confirm-password">Confirmar contraseña</label>
          <input class="text-box-sarabia" type="password" name="confirm-password">

          <button class="btn-sarabia p-2" type="submit">Guardar contraseña</button>
        </form>
      </div>
    </div>
  </body>
@endsection
