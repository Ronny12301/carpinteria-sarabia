@extends('layouts.app')

@section('title', 'Agregar Mueble')

@section('content')

  <body class="font-principal">
    <div class="flex h-screen">

      <div class="h-screen fixed w-8/12 bg-cover bg-no-repeat bg-left bg-fondo-registro-mueble"> </div>

      <div class="h-screen overflow-auto w-4/12 ml-auto">
        <div class="bg-cafe-sarabia text-white flex flex-col">
          <h1 class="p-14 pt-16 text-3xl text-center">Registrar mueble.</h1>
          <h2 class="pr-3 pb-10 pl-16">Ingrese los datos para registrar el mueble.</h2>
        </div>

        <form action="{{ route('muebles.store') }}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="flex flex-col space-y-4 text-center p-6">

            <label for="nombre">Nombre</label> <br>
            <input class="text-box-sarabia"  type="text" name="nombre" id="nombre" placeholder="Nombre del mueble"
              value="{{ old('nombre') }}">
            @error('nombre')
              <small>{{ $message }}</small>
            @enderror

            <label for="descripcion">Descripción</label> <br>
            <textarea class="text-box-sarabia rounded-sm" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripción del mueble">{{ old('descripcion') }}</textarea>
            @error('descripcion')
            <small class="text-red-700">{{ $message }}</small>
            @enderror

            <label for="tipo">Tipo</label> <br>
            <input class="text-box-sarabia" type="text" name="tipo" id="tipo" value="{{ old('tipo') }}">
            @error('cantidad')
            <small class="text-red-700">{{ $message }}</small>
            @enderror

            <label for="cantidad">Cantidad</label> <br>
            <input class="text-box-sarabia" type="number" name="cantidad" id="cantidad" placeholder="0" value="{{ old('cantidad') }}">
            @error('cantidad')
            <small class="text-red-700">{{ $message }}</small>
            @enderror

            <label for="precio">Precio</label> <br>
            <input class="text-box-sarabia" type="text" name="precio" id="precio" placeholder="100" value="{{ old('precio') }}">
            @error('precio')
            <small class="text-red-700">{{ $message }}</small>
            @enderror

            <label name="imagen">Subir imagen:</label> <br>
            <input name="imagen" type="file">
            @error('imagen')
            <small class="text-red-700">{{ $message }}</small>
            @enderror

            <button class="btn-sarabia" type="submit">Agregar mueble</button>
          </div>
        </form>
      </div>
    </div>
  </body>
@endsection
