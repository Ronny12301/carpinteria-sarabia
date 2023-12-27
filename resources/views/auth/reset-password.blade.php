@extends('layouts.app')

@section('title', 'Nueva Contraseña')

@section('content')
  @include('layouts.header', ['title' => 'Nueva Contraseña'])

  <body class="font-principal space-x-0 space-y-12">
    @include('layouts.popups.success')

    <div class="flex">

      <div class="sm:w-3/5 fixed h-screen bg-cover bg-no-repeat bg-left bg-fondo-reset"> </div>

      <div class="w-screen sm:w-2/5 ml-auto">
        <div class="bg-cafe-sarabia text-white text-center flex flex-col">
          <h1 class="pt-8 text-3xl m-4">Ingrese su nueva contraseña</h1>
          <h1 class="pb-10 text-2xl">{{ $usuario->name }}</h1>

        </div>

        <form action="{{ route('update-password', $usuario->user_id) }}" method="POST" class="flex flex-col items-center justify-center m-6">
          @csrf

          <label for="password">Nueva contraseña</label>
          <input class="text-box-sarabia mb-3" type="password" id="password" name="password" placeholder="Contraseña">
          @error('password')
            <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
          @enderror
          <br>

          <label for="password_confirmation">Confirmar contraseña</label>
          <input class="text-box-sarabia mb-3" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña">
 
          <button class="btn-sarabia p-2" type="submit">Guardar contraseña</button>
        </form>
      </div>
    </div>
  </body>
@endsection
