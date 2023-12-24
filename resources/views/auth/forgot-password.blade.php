@extends('layouts.app')

@section('title', 'Recuperar Contraseña')

@section('content')
  @include('layouts.header', ['title' => 'Recuperar Contraseña'])

  {{-- para ver la de restaurar la contraseña vete a /reset-password --}}

  <body class="font-principal space-x-0 space-y-12">

    <div class="flex">

      <div class="sm:w-3/5 fixed h-screen bg-cover bg-no-repeat bg-left bg-fondo-forget"> </div>

      <div class="w-screen sm:w-2/5 ml-auto">
        <div class="bg-cafe-sarabia text-white text-center flex flex-col">
          <h1 class="pt-8 pb-10 text-3xl m-4">Ingrese su correo o nombre de usuario</h1>

        </div>

          <form action="{{ route('send-mail') }}" method="post">
            @csrf

            <div class="flex flex-col ml-6 mr-6 -mb-8 mt-6">

              <input placeholder="Correo o nombre de usuario" class="text-box-sarabia mt-5" id="mail" name="mail" type="text">
              @error('mail')
                <small class="text-red-700 ml-4">El campo correo es obligatorio</small>
              @enderror

              <button type="submit" class="btn-sarabia">Enviar</button>
            </div>

          </form>


      </div>
    </div>
  </body>
@endsection
