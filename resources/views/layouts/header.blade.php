<header style="position:fixed; top:0; left:0; right:0">
    <h2>
        <a class="text-white text-xl m-3 p-4" href="{{ route('home') }}">Inicio</a>
    </h2>
    
    @auth
        <p class="text-white text-base p-4" style="position: absolute; right:1em; top:0em">Usuario: {{ auth()->user()->name }}</p>
    
        <form action="{{ route('logout') }}" method="get">
            @csrf
            <button class="text-white text-base p-4" type="submit" style="position: absolute; right:1em; top:3em">Cerrar Sesión</button>
        </form>
    
    @endauth
</header>