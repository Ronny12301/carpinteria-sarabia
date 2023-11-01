<?php

namespace App\Http\Controllers;

use App\Http\Requests\MuebleRequest;
use App\Models\Mueble;

class MuebleController extends Controller
{

    private $muebles = [
        [
            "title" => "Mesa de centro",
            "description" => "Mesa de centro de madera",
            "price" => 1000,
            "image" => "https://www.ikea.com/mx/es/images/products/lack-mesa-de-centro-blanco__57599_PE163119_S5.JPG?f=s"
        ],
        [
            "title" => "Mesa de comedor",
            "description" => "Mesa de comedor de madera",
            "price" => 2000,
            "image" => "https://www.ikea.com/mx/es/images/products/ekedalen-mesa-extensible-blanco__0718875_PE731522_S5.JPG?f=s"
        ],
        [
            "title" => "Silla",
            "description" => "Silla de madera",
            "price" => 500,
            "image" => "https://www.ikea.com/mx/es/images/products/ingolf-silla-blanco__0718874_PE731521_S5.JPG?f=s"
        ],
        [
            "title" => "Sofá",
            "description" => "Sofá de madera",
            "price" => 3000,
            "image" => "https://www.ikea.com/mx/es/images/products/ektorp-sofa-3-plazas-nordvalla-gris__0718873_PE731520_S5.JPG?f=s"
        ],
        [
            "title" => "Cama",
            "description" => "Cama de madera",
            "price" => 4000,
            "image" => "https://www.ikea.com/mx/es/images/products/malm-cama-alto-blanco__0718872_PE731519_S5.JPG?f=s"
        ],
        [
            "title" => "Cómoda",
            "description" => "Cómoda de madera",
            "price" => 3000,
            "image" => "https://www.ikea.com/mx/es/images/products/malm-comoda-6-cajones-blanco__0718871_PE731518_S5.JPG?f=s"
        ],
        [
            "title" => "Armario",
            "description" => "Armario de madera",
            "price" => 5000,
            "image" => "https://www.ikea.com/mx/es/images/products/brimnes-armario-3-puertas-blanco__0718870_PE731517_S5.JPG?f=s"
        ]
    ];

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
