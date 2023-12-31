@extends('layouts.app')

@section('title', 'Modificar ' . $mueble->nombre)

@section('content')

  <body class="font-principal">
    <div class="flex">

      <div
        class="h-screen fixed sm:w-3/5 bg-cover bg-no-repeat bg-left bg-fondo-registro-mueble backdrop-opacity-100 hover:backdrop-opacity-50 transition-all duration-1000">
        <img src="{{ $mueble->imagen ? asset($mueble->imagen) : img('null.webp') }}" alt="Imagen del mueble"
          class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-1/2 h-auto rounded-lg">
      </div>

      <div class="w-screen sm:w-2/5 ml-auto">
        <div class="bg-cafe-sarabia text-white text-center flex flex-col">
          <h1 class="pt-6 pb-4 text-3xl">Modificar mueble.</h1>
          <h2 class="pb-4">Ingrese los datos para modificar el mueble.</h2>
        </div>

        <form action="{{ route('muebles.update', $mueble) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')

          <div class="flex flex-col ml-6 mr-6 -mb-8 mt-6">

            <label for="nombre" class="ml-4">Nombre</label>
            <input class="text-box-sarabia mb-3" type="text" name="nombre" id="nombre"
              placeholder="Nombre del mueble" value="{{ $mueble->nombre }}">
            @error('nombre')
              <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
            @enderror

            <label for="descripcion" class="ml-4">Descripción</label>
            <textarea class="text-box-sarabia mb-3 rounded-lg h-14" name="descripcion" id="descripcion" cols="30"
              rows="10" placeholder="Descripción del mueble">{{ $mueble->descripcion }}</textarea>
            @error('descripcion')
              <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
            @enderror

            <label for="tipo" class="ml-4">Tipo</label>
            <input class="text-box-sarabia mb-3" type="text" name="tipo" id="tipo" value="{{ $mueble->tipo }}">
            @error('tipo')
              <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
            @enderror

            <div class="flex mb-3 justify-between">
              <div class="mr-2">
                <label for="cantidad" class="ml-4">Cantidad</label>
                <input class="text-box-sarabia" type="number" name="cantidad" id="cantidad" placeholder="0"
                  value="{{ $mueble->cantidad }}">
                @error('cantidad')
                  <small class="text-red-700 ml-4">{{ $message }}</small>
                @enderror
              </div>

              <div class="ml-2">
                <label for="precio" class="ml-4">Precio</label>
                <input class="text-box-sarabia" type="text" name="precio" id="precio" placeholder="100"
                  value="{{ $mueble->precio }}">
                @error('precio')
                  <small class="text-red-700 ml-4">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <label name="imagen" class="ml-4">Subir imagen:</label>
            <input name="imagen" type="file">
            @error('imagen')
              <small class="text-red-700 -mt-3 ml-4">{{ $message }}</small>
            @enderror

            <button class="btn-sarabia mt-5" type="submit">Modificar mueble</button>
          </div>
        </form>
      </div>
    </div>
  </body>
@endsection
