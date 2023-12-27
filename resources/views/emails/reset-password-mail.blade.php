<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>

  </head>
  <body class="font-principal text-center bg-slate-100" style='font-family:Ubuntu, "Inter", sans-serif;text-align:center;background-color:rgb(241 245 249);'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <style>
        .hover\:bg-cafe-sarabia-hover:hover{background-color:rgb(135 46 16)}
    </style>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,700&display=swap');
    </style>
    <div>
      <h1 class="text-4xl font-titulos bg-cafe-sarabia text-white py-9" style='font-size:2.25rem;line-height:2.5rem;font-family:Cormorant Garamond, "Inter", sans-serif;background-color:rgb(166 56 20);color:#fff;padding-top:2.25rem;padding-bottom:2.25rem;'>
        Solicitud para restaurar contraseña
      </h1>
    </div>
    <br>
    <h2>Se ha solicitado restaurar la contraseña de su cuenta:</h2>
    <br>
    <a href="{{ route('reset-password',['usuario' => $usuario, 'timestamp' => $timestamp]) }}" class="text-lg bg-cafe-sarabia hover:bg-cafe-sarabia-hover px-5
        border-transparent rounded-full text-white border-8 m-10 no-underline" style="background-color:rgb(166 56 20);color:#fff;font-size:1.125rem;line-height:1.75rem;padding-left:1.25rem;padding-right:1.25rem;padding-top:0.75rem;padding-bottom:0.75rem;border-color:transparent;border-radius:9999px;border-width:2rem;margin:2.5rem;text-decoration:none;">
      Restaurar contraseña
    </a>

    <br><br><br><br>

    <small>Carpintería Sarabia</small> <br>
    <small>La calidad se mide en el hogar</small>
  </body>
</html>




















{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,700&display=swap');

        .font-principal {
            font-family: Ubuntu, "Inter", sans-serif;
        }

        .text-center {
            text-align: center;
        }

        .bg-slate-100 {
            background-color: rgb(241 245 249);
        }

        .text-4xl {
            font-size: 2.25rem/* 36px */;
            line-height: 2.5rem/* 40px */;
        }

        .font-titulos {
            font-family: Cormorant Garamond, "Inter", sans-serif;
        }

        .bg-cafe-sarabia {
            background-color: rgb(166 56 20);
        }

        .text-white {
            color: #fff;
        }

        .py-9 {
            padding-top: 2.25rem/* 36px */;
            padding-bottom: 2.25rem/* 36px */;
        }

        .text-lg {
            font-size: 1.125rem/* 18px */;
            line-height: 1.75rem/* 28px */;
        }

        .btn-sarabia {
            border-radius: 0.375rem/* 6px */;
            padding-top: 0.75rem/* 12px */;
            padding-bottom: 0.75rem/* 12px */;
            padding-left: 1.5rem/* 24px */;
            padding-right: 1.5rem/* 24px */;
            font-weight: 600;
            line-height: 1.25rem/* 20px */;
            letter-spacing: 0.025em/* 0.4px */;
            text-transform: uppercase;
            border-width: 1px;
            border-style: solid;
            border-color: transparent;
            background-color: rgb(84 58 58);
            color: #fff;
        }

        .hover\:bg-cafe-sarabia-hover:hover {
            background-color: rgb(135 46 16);
        }

        .px-5 {
            padding-left: 1.25rem/* 20px */;
            padding-right: 1.25rem/* 20px */;
            padding-top: 0.75rem/* 20px */;
            padding-bottom: 0.75rem/* 20px */;
        }

        .border-transparent {
            border-color: transparent;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .border-8 {
            border-width: 2rem/* 32px */;
        }

        .m-10 {
            margin: 2.5rem/* 40px */;
        }

        .no-underline {
            text-decoration: none;
        }
    </style>

</head>

<body class="font-principal text-center bg-slate-100">
    <div>
        <h1 class="text-4xl font-titulos bg-cafe-sarabia text-white py-9">
            Solicitud para restaurar contraseña
        </h1>
    </div>
    <br>
    <h2>Se ha solicitado restaurar la contraseña de su cuenta:</h2>
    <br>
    
    <a href="{{ route('reset-password',$usuario) }}" 
        class="text-lg bg-cafe-sarabia hover:bg-cafe-sarabia-hover px-5
        border-transparent rounded-full text-white border-8 m-10 no-underline"
    >
        Restaurar contraseña
    </a>

    <br> <br> <br> <br>
    <small>Carpintería Sarabia</small> <br>
    <small>La calidad se mide en el hogar</small>
</body>
</html> --}}
