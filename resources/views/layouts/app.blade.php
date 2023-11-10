<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Carpintería Sarabia</title>
    @vite('resources/css/app.css')
    @yield('head')
</head>
<body>
    @include('layouts.header')
    @yield('content')

    @include('layouts.footer')

    @yield('scripts')
</body>
</html>