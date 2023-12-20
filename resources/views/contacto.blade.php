@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<body class="font-principal">
    @include('layouts.header', ['title' => 'Datos de contacto'])

    <div class="flex justify-center space-x-10 m-10">

        <div class="mt-auto mb-auto ml-2" style="font-size: 1.7vw">
            <p>Responsable:</p>
            <p class="text-gray-600">Manuel Sarabia Enríquez.</p>
            <p>Correo electrónico:</p>
            <p class="text-gray-600">Manuel.sarabia.MSE@gmail.com</p>
            <p>Dirección:</p>
            <p class="text-gray-600">Juan Escutia 1208, Benito Juárez Norte.</p>
            <p>Telefono:</p>
            <p class="text-gray-600">921-261-2358.</p>
        </div>

        <iframe class="border-4 border-cafe-sarabia rounded-3xl"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.522096029688!2d-94.44138879739637!3d18.139847591961374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85e983000ef8838b%3A0xf514cbfb07cb0d61!2sAv%20Juan%20Escutia%201208%2C%20Benito%20Ju%C3%A1rez%20Nte.%2C%2096576%20Coatzacoalcos%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1698210735032!5m2!1ses-419!2smx"
            width="720" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        >
        </iframe>
    </div>
</body>


@endsection
