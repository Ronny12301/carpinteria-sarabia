<header style="position:fixed; top:0; left:0; right:0">
    <h2>
        <a href="{{ route('home') }}">Inicio</a>
    </h2>
    
    @auth
        <p style="position: absolute; right:1em; top:0em">Usuario: {{ auth()->user()->name }}</p>
    
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" style="position: absolute; right:1em; top:3em">Cerrar Sesión</button>
        </form>
    
    @endauth
</header>

<br>
<br>
<br>