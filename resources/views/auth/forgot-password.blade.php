@extends('layouts.app')

@section('title', 'Recuperar Contraseña')

@section('content')
  @include('layouts.header', ['title' => 'Recuperar Contraseña'])

  {{-- para ver la de restaurar la contraseña vete a /reset-password --}}

  <body class="font-principal space-x-0 space-y-12">

    <div class="flex">

      <div class="w-3/5 fixed h-screen bg-cover bg-no-repeat bg-left bg-fondo-forget"> </div>

      <div class="w-2/5 ml-auto">
        <div class="bg-cafe-sarabia text-white text-center flex flex-col">
          <h1 class="pt-8 pb-10 text-3xl m-4">Ingrese su correo o nombre de usuario</h1>

        </div>

        <div class="flex flex-col ml-6 mr-6 -mb-8 mt-6">

          <form action="{{ route('reset-password') }}" method="get"></form>

          <input placeholder="Correo o nombre de usuario" class="text-box-sarabia mt-5" name="name" type="text">

          <button class="btn-sarabia">Enviar</button>
        </div>

      </div>
    </div>
  </body>
@endsection
