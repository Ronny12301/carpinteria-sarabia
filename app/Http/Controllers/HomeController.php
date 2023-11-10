<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        $title = "Inicio";

        $options = [
            [
                "name" => "Cátalogo de Muebles",
                "link" => route("muebles.index"),
            ],
            [
                "name" => "Datos de contacto",
                "link" => route("contacto"),
            ],
        ];

        if (auth()->check()) {
            $title = "Administración";

            $options = [
                [
                    "name" => "Administrar Muebles",
                    "link" => route("muebles.index"),
                ],
                [
                    "name" => "Control de Ventas",
                    "link" => route("ventas.index"),
                ],
                [
                    "name" => "Datos de contacto",
                    "link" => route("contacto"),
                ],
            ];
        }

        return view('home')->with([
            'options' => $options,
            'title' => $title,
        ]);
    }

}
