@extends('layouts.app')

@section('title', $title)

@section('content')

  <body class="bg-fondo-principal bg-cover bg-no-repeat bg-fixed font-principal text-white">
    @include('layouts.header', ['title' => ''])

    <div class="flex flex-col items-center justify-center h-screen">
      <div>
        <h1 class="text-4xl sm:text-7xl text-center font-titulos">CARPINTERIA SARABIA</h1>
      </div>
      <div>
        <h2 class="text-2xl sm:text-3xl font-titulos">"La calidad se mide en el hogar"</h2><br>
      </div>

      @auth
      <h1>Administración</h1>
      <p>Bienvenido {{ auth()->user()->name }}</p>
        <p class="pb-12">¿Qué desea hacer?</p>
      @endauth

      
      @foreach ($options as $option)
        <a class="btn-sarabia my-2 hover:animate-bounce hover:bg-cafe-sarabia-hover 
          text-[15px] sm:text-xl px-5 sm:px-10 shadow-black drop-shadow-lg" 
          href="{{ $option['link'] }}"
        >
          {{ $option['name'] }}
        </a>
      @endforeach

    </div>
  </body>
@endsection
