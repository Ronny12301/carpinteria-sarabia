@extends('layouts.app')

@section('title', 'Muebles')

@section('content')

  <body class="font-principal">

    @auth
      <div class="bg-cafe-sarabia text-center text-4xl text-white p-9">
        <h1>Administrar muebles</h1>
      </div>

      <button class="btn-sarabia p-3 fixed bottom-0 right-0 mr-4" type="submit" href="{{ route('muebles.create') }}">Agregar
        mueble</button>
    @else
      <div class="bg-cafe-sarabia text-center text-4xl text-white p-9">
        <h1>Catalogo de muebles</h1>
      </div>
    @endauth

    <div class="grid grid-cols-3 gap-4 m-8">
      @foreach ($muebles as $mueble)
        <article>
          <h3><strong>Nombre:</strong> {{ $mueble->nombre }}</h3>
          <p><strong>Descripcion:</strong> {{ $mueble->descripcion }}</p>
          <p><strong>Tipo:</strong> {{ $mueble->tipo }}</p>
          <p><strong>Precio:</strong> {{ $mueble->precio }}</p>
          <p><strong>Disponibles:</strong></p>
            <img class="border-4 border-cafe-sarabia rounded-3xl mt-3" src="{{ $mueble->imagen ?? img('null.webp') }}"
              alt="{{ $mueble->nombre }}" style="height: 200px">
            @auth
              <button class="btn-sarabia p-1 ml-0" href="">Editar</button>
              <button class="btn-sarabia p-1 ml-0" href="">Eliminar</button>
            @endauth
        </article>
      @endforeach
    </div>
  </body>
@endsection
