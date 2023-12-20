@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
<body class="font-principal">
<div class="flex">

    <div class="w-3/5 fixed h-screen bg-cover bg-no-repeat bg-left bg-fondo-login"> </div>

    <div class="w-2/5 ml-auto">
        <div class="bg-cafe-sarabia text-white text-center flex flex-col">
          <h1 class="pt-8 pb-10 text-3xl">Inicio de sesión de empleados</h1>
          <h2 class="pb-6">Este servicio esta reservado unicamente a los empleados activos de la carpinteria sarabia</h2>
        </div>    

        <form action="{{ route('signin') }}" method="post">
            @csrf

            <div class="flex flex-col ml-6 mr-6 -mb-8 mt-6">
                <label for="name" class="ml-4">Usuario</label>
                <input class="text-box-sarabia mb-3" 
                    type="name" name="name" id="name" placeholder="Usuario"
                >
                @error('name')
                    <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
                @enderror
    
                <label for="password" class="ml-4">Contraseña</label>
                <input class="text-box-sarabia mb-3" 
                    type="password" name="password" id="password" placeholder="Contraseña"
                >
                @error('password')
                    <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
                @enderror

                <a href="{{ route('forgot-password') }}">¿Olvidó su contraseña?</a>

                <button class="btn-sarabia" 
                type="submit">
                    Iniciar sesión
                </button>
            </div>
        </form>
    </div>
    </div>
</div>
</body>
    
@endsection