@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
<body class="font-principal">
<div class="flex h-screen">

    <div class="w-8/12 bg-cover bg-no-repeat bg-left bg-fondo-login"> </div>

    <div class="w-4/12 flex-1">
        <div class="bg-cafe-sarabia text-white flex flex-col">
          <h1 class="p-14 pt-16 text-5xl text-center">Inicio de sesión de empleados</h1>
          <h2 class="pr-3 pb-10 pl-16">Este servicio esta reservado unicamente a los empleados activos de la carpinteria sarabia</h2>
        </div>    

        <form action="{{ route('signin') }}" method="post">
            @csrf

            <div class="flex flex-col space-y-4 text-center p-6">
                <label for="name">Usuario</label>
                <input class="text-box-sarabia" 
                    type="name" name="name" id="name" placeholder="Usuario"
                >
                @error('name')
                    <small class="">{{ $message }}</small>
                @enderror
    
                <label for="password">Contraseña</label>
                <input class="text-box-sarabia" 
                    type="password" name="password" id="password" placeholder="Contraseña"
                >
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
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