@extends('layouts.app')

@section('title', 'Agregar Mueble')

@section('content')

    <h1>Agregar Mueble</h1> 

    <form action="{{ route("muebles.store") }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <label for="nombre">Nombre</label> <br>
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

        <label for="tipo">Tipo</label> <br>
        <input type="text" name="tipo" id="tipo" value="{{ old('tipo') }}">
        @error('cantidad')
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
        <input type="text" name="precio" id="precio" placeholder="100" value="{{ old('precio') }}"> $
        @error('precio')
            <small>{{ $message }}</small>
        @enderror
        <br>

        <label name="imagen">Subir imagen:</label> <br>
        <input name="imagen" type="file">
        @error('imagen')
            <small>{{ $message }}</small>
        @enderror

        <br>

        <button type="submit">Agregar mueble</button>

    </form>
    
@endsection