@extends('layouts.app')

@section('title', 'Modificar ' . $mueble->nombre)

@section('content')

  <body class="font-principal">
    <h1>Agregar Mueble</h1>
    <p>
      <a href="{{ route('muebles.index') }}">Regresar</a>
    </p>

    <form action="{{ route('muebles.update') }}" method="post">
      @csrf

      <label for="nombre" class="ml-2">Nombre</label> <br>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre del mueble" value="{{ old('nombre') }}">
      @error('nombre')
        <small>{{ $message }}</small>
      @enderror
      <br>

      <label for="descripcion">Descripción</label> <br>
      <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripción del mueble">{{ old('descripcion') }}</textarea>
      @error('descripcion')
        <small>{{ $message }}</small>
      @enderror
      <br>

      <label for="cantidad">Cantidad</label> <br>
      <input type="number" name="cantidad" id="cantidad" placeholder="0" value="{{ old('cantidad') }}">
      @error('cantidad')
        <small>{{ $message }}</small>
      @enderror
      <br>

      <label for="precio">Precio</label> <br>
      <input type="number" name="precio" id="precio" placeholder="100" value="{{ old('precio') }}"> $
      @error('precio')
        <small>{{ $message }}</small>
      @enderror

      <br>

      <button type="submit">Agregar mueble</button>

    </form>
  </body>

@endsection
