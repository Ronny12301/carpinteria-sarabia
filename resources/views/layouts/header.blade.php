<header style="position:fixed; top:0; left:0; right:0" 
    class="@unless(\Request::routeIs('home')) bg-cafe-sarabia @endunless
        text-center text-4xl 
        text-white p-9"
>

    <h2>
        <a class="text-white text-xl mt-10 ml-3 absolute left-0 top-0" href="{{ route('home') }}">Inicio</a>
    </h2>

    <h1>{{ $title ?? "" }}</h1>

    @auth
        <p class="text-white text-base p-4" style="position: absolute; right:1em; top:0em">Usuario: {{ auth()->user()->name }}</p>
    
        <form action="{{ route('logout') }}" method="get">
            @csrf
            <button class="text-white text-base p-4" type="submit" style="position: absolute; right:1em; top:3em">Cerrar Sesión</button>
        </form>
    
    @endauth
</header>
@unless(\Request::routeIs('home'))
    <div class="mb-36"></div>
@endunless