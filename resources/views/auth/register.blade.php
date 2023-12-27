@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')

<div class="sm:w-3/5 fixed h-screen bg-cover bg-no-repeat bg-left bg-fondo-login"> </div>
    <div class="w-screen sm:w-2/5 ml-auto">
        <div class="bg-cafe-sarabia text-white text-center flex flex-col">
            <h1 class="pt-8 pb-10 text-3xl mx-2">Registrarse</h1>
          </div>   

        <form action="{{ route('register') }}" method="post">
            @csrf

            <div class="flex flex-col ml-6 mr-6 -mb-8 mt-6">
                <label class="ml-4" for="name">Usuario</label>
                <input class="text-box-sarabia mb-3"
                    type="name" name="name" 
                    id="name" placeholder="Usuario" 
                    value="{{ old('name') }}"
                >
                @error('name')
                    <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
                @enderror
        
                <label class="ml-4" for="email">Correo</label>
                <input class="text-box-sarabia mb-3"
                    type="email" name="email" 
                    id="email" placeholder="correo@example.com"
                    value="{{ old('email') }}"
                >
                @error('email')
                    <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
                @enderror
        
                <label class="ml-4" for="password">Contraseña</label>
                <input class="text-box-sarabia mb-3"
                    type="password" name="password" 
                    id="password" placeholder="Contraseña"
                >
                @error('password')
                    <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
                @enderror
        
                <label class="ml-4" for="password_confirmation">Confirmar contraseña</label>
                <input class="text-box-sarabia mb-3"
                    type="password" name="password_confirmation" 
                    id="password_confirmation" placeholder="Confirmar contraseña"
                >
        
                <button type="submit" class="btn-sarabia hover:bg-cafe-sarabia-hover">
                    Registrarse
                </button>
            </div>
        </form>
    </div>

    

</div>
    
@endsection