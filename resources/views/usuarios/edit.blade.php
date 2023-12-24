@extends('layouts.app')

@section('title', 'Actualizar Empleado')

@section('content')

<div class="sm:w-3/5 fixed h-screen bg-cover bg-no-repeat bg-left bg-fondo-registrar-usuario"> </div>
    <div class="w-screen sm:w-2/5 ml-auto">
        <div class="bg-cafe-sarabia text-white text-center flex flex-col">
            <h1 class="pt-8 pb-10 text-3xl mx-2">Actualizar Empleado</h1>
            <h2 class="pb-6 mx-9">Introduzca los datos del empleado escogido.</h2>
          </div>   

        <form action="{{ route('usuarios.update', $usuario) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="flex flex-col ml-6 mr-6 -mb-8 mt-6">
                <label class="ml-4" for="name">Usuario</label>
                <input class="text-box-sarabia mb-3"
                    type="name" name="name" 
                    id="name" placeholder="Usuario" 
                    value="{{ old('name') ?? $usuario->name }}"
                >
                @error('name')
                    <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
                @enderror
                @if (auth()->user()->user_id === $usuario->user_id )
                    <label class="ml-4" for="email">Correo</label>
                    <input class="text-box-sarabia mb-3"
                        type="email" name="email" 
                        id="email" placeholder="correo@example.com"
                        value="{{ old('email') ?? $usuario->email }}"
                    >
                @endif
        
                <button type="submit" class="btn-sarabia hover:bg-cafe-sarabia-hover">
                    Actualizar datos
                </button>
            </div>
        </form>
    </div>
</div>
    
@endsection