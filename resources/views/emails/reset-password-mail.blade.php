<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>
    @vite('resources/css/app.css')
</head>
<body class="font-principal text-center bg-slate-100">
    <div>
        <h1 class="text-4xl font-titulos bg-cafe-sarabia text-white py-9">
            Solicitud para restaurar contraseña
        </h1>
    </div>
    <br>
    <p class="text-lg">Se ha solicitado restaurar la contraseña de su cuenta:</p>
    <br>
    
    <a href="{{ route('reset-password', $usuario) }}" class="text-lg btn-sarabia hover:bg-cafe-sarabia-hover px-5">Restaurar contraseña</a>
</body>
</html>
