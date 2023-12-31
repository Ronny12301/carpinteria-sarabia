@extends('layouts.app')

@section('title', 'Empleados')

@section('content')
  <body class="font-principal">
    @include('layouts.popups.success')
    @include('layouts.popups.error')

    <div x-data="{
      search: '',
      searchUsuario(el) {
        return this.search === '' || el.textContent.toLowerCase().includes(this.search.toLowerCase());
      }
    }">

    @auth
        @include('layouts.header', ['title' => 'Lista de Empleados'])

        <a class="btn-sarabia shadow-md shadow-black p-1 sm:p-3 fixed bottom-5 -right-3 sm:right-3 fill-white hover:bg-cafe-sarabia-hover z-50" 
        href="{{ route('usuarios.create') }}"
        >
        <svg class="fill-inherit" xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
        </a>      
    @endauth

    <input x-model="search" type="search" placeholder="Buscar usuarios" class="px-3 py-2 absolute right-10 top-[83px] border rounded-lg">
    <br> <br>

    <div class="px-12 sm:px-32 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 mb-0 max-w-screen-xl lg:mx-auto">
      @foreach ($usuarios as $usuario)
        <article x-show="searchUsuario($el)" class="bg-slate-50 border-2 border-slate-300 shadow-gray-300 shadow-lg rounded-md ">
          <div class="bg-cafe-sarabia py-4 text-white text-xl rounded-t-md text-center border-b-2 border-slate-300">
            <h3><strong>{{ $usuario->name }}</strong></h3>
          </div>
          <div class="mx-5 mt-5">
            <p class="mb-2">{{ $usuario->name }}</p>
            <p><strong>Correo:</strong> {{ $usuario->email }}</p>
            <p><strong>Creado:</strong> {{ printDateTime($usuario->created_at) }}</p>
            <br>
          </div>
        
            {{-- <img class="border-4 border-cafe-sarabia bg-white rounded-3xl mt-3 mx-auto mb-5" src="{{ $usuario->imagen ?? img('null.webp') }}"
              alt="{{ $usuario->nombre }}" style="height: 200px"
            > --}}
          @auth
          @include('layouts.modals.delete')

            <div class="flex justify-center h-20">
              <a href="{{ route('usuarios.edit', $usuario) }}" class="btn-sarabia relative -top-9 h-max p-2 fill-white hover:fill-gray-200 hover:bg-cafe-sarabia-hover">
                <svg class="fill-inherit" xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
              </a>

              <form action="{{ route('usuarios.destroy', $usuario) }}" method="post">
                @csrf
                @method('delete')

                <button type="submit"
                    class="btn-sarabia p-2 fill-white hover:fill-gray-200 
                    hover:bg-cafe-sarabia-hover  relative -top-9"
                >
                  <svg class="fill-inherit" xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>                
                </button>         
              </form>
            </div>
          @endauth
        </article>
      @endforeach
    </div>
  </body>
  <br>
@endsection
