<?php

namespace App\Http\Controllers;

use App\Http\Requests\MuebleRequest;
use App\Models\Mueble;

class MuebleController extends Controller
{

    /**
     * Muestra una lista de los muebles disponibles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $muebles = Mueble::all();

        return view('muebles.index')->with('muebles', $muebles);
    }

    /**
     * Muestra el formulario para crear un nuevo mueble.
     *
     * @return \Illuminate\View\View
     */
    public function create() 
    {
        return view('muebles.create');
    }

    /**
     * Muestra el formulario para editar un mueble.
     *
     * @return \Illuminate\View\View
     */
    public function edit() 
    {
        return view('muebles.edit');
    }

    /**
     * Muestra la vista para visualizar un mueble en específico.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show() 
    {
        return view('muebles.show');
    }

    /**
     * Almacena un nuevo mueble en la base de datos.
     *
     * @param  MuebleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MuebleRequest $request) 
    {
        $request->validated();

        $mueble = $request->except('imagen');

        if ($request->hasFile('imagen')) {
            $img = $request->file('imagen')->store('public/muebles');
            $img = str_replace('public/', '', $img);
            $mueble['imagen'] = "storage/$img";
        }
     
        Mueble::create($mueble);

        return redirect()->route('muebles.index');
    }

    /**
     * Actualiza un mueble existente en la base de datos.
     *
     * @param  MuebleRequest  $request
     * @param  \App\Models\Mueble  $mueble
     * @return \Illuminate\Http\Response
     */
    public function update(MuebleRequest $request, Mueble $mueble) 
    {
        $request->validated();

        $mueble->update($request->all());

        return redirect()->route('muebles.index');
    }
}
