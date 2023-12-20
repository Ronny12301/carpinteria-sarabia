@extends('layouts.app')

@section('title', 'Muebles')

@section('content')
  <body class="font-principal">

    @auth
    @include('layouts.header', ['title' => 'Administrar Muebles'])

      <a class="btn-sarabia p-3 fixed bottom-3 right-0 mr-4" href="{{ route('muebles.create') }}">
        Agregar mueble
      </a>

    @else
      @include('layouts.header', ['title' => 'Cátalogo de Muebles'])
    @endauth

    <div class="grid grid-cols-3 gap-4 mt-7 mb-0 mx-auto max-w-screen-lg">
      @foreach ($muebles as $mueble)
        <article>

          <h3><strong>Nombre:</strong> {{ $mueble->nombre }}</h3>
          <p><strong>Descripcion:</strong> {{ $mueble->descripcion }}</p>
          <p><strong>Tipo:</strong> {{ $mueble->tipo }}</p>
          <p><strong>Precio:</strong> {{ $mueble->precio }}</p>
          <p><strong>Disponibles:</strong> {{ $mueble->cantidad }}</p>
          
            <img class="border-4 border-cafe-sarabia rounded-3xl mt-3" src="{{ $mueble->imagen ?? img('null.webp') }}"
              alt="{{ $mueble->nombre }}" style="height: 200px">
            @auth
            <div class="flex">
              <a href="{{ route('muebles.edit', $mueble) }}" class="btn-sarabia p-1 ml-0">Editar</a>

              <form action="{{ route('muebles.destroy', $mueble) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn-sarabia p-1 ml-0 inline">Eliminar</button>            
              </form>
            </div>
              
            @endauth
        </article>
      @endforeach
    </div>
  </body>
@endsection
