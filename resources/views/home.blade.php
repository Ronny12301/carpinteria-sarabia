@extends('layouts.app')

@section('title', $title)

@section('content')

  <body class="bg-fondo-principal bg-cover bg-no-repeat bg-fixed font-principal text-white">
    @include('layouts.header', ['title' => ''])

    <div class="flex flex-col items-center justify-center h-screen">
      <div>
        <h1 class="text-6xl">CARPINTERIA SARABIA</h1>
      </div>
      <div>
        <h2 class="text-3xl">"La calidad se mide en el hogar"</h2><br>
      </div>

      @auth
        <h1>Administración</h1>
        <p>Bienvenido {{ auth()->user()->name }}</p>
        <p>¿Qué desea hacer?</p>
        <br>
      @endauth

      <div class="text-xl space-y-8 shadow">
        @foreach ($options as $option)
          <a class="px-5 drop-shadow-lg" href="{{ $option['link'] }}">{{ $option['name'] }}</a>
        @endforeach
      </div>

      @guest
        <a href="{{ route('login') }}" class="btn-sarabia px-5 text-xl space-y-8 drop-shadow-lg hover:animate-bounce ">
          <h1>Iniciar sesión</h1>
        </a>
      @endguest

    </div>
  </body>
@endsection
