@extends('layouts.app')

@section('title', 'Registrar usuario')

@section('content')

  <body class="font-principal">
    <div class="flex h-screen">

      <div class="w-8/12 bg-cover bg-no-repeat bg-left bg-fondo-registrar-usuario"> </div>

      <div class="w-4/12 flex-1">

        <div class="bg-cafe-sarabia text-white flex flex-col">
          <h1 class="p-14 pt-16 text-4xl text-center">Registrar empleado.</h1>
          <h2 class="pr-3 pb-10 pl-16">Este servicio esta reservado unicamente pare el usuario administrador.</h2>
        </div>

        <div class="flex flex-col space-y-4 text-center p-6">
          <label for="name">Usuario</label>
          <input class="text-box-sarabia" type="name" name="name" id="name" placeholder="Usuario">
          @error('name')
          <small class="text-red-700">{{ $message }}</small>
          @enderror

          <label>Correo electronico</label>
           <input class="text-box-sarabia" type="text" name="email" id="email" placeholder="Correo electronico">

          <label for="password">Contraseña</label>
          <input class="text-box-sarabia" type="password" name="password" id="password" placeholder="Contraseña">
          @error('password')
          <small class="text-red-700">{{ $message }}</small>
          @enderror
          <button class="btn-sarabia" type="submit">
            Registrar
          </button>
        </div>
      </div>
    </div>
    </div>
  </body>
@endsection
