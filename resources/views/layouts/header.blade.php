<header style="position:fixed; top:0; left:0; right:0" 
    class="@unless(\Request::routeIs('home')) bg-cafe-sarabia @endunless
        text-center text-4xl 
        text-white p-3
        z-50"
>

<h2>
    <a class="text-white fill-white hover:fill-gray-200 text-xl absolute left-5 top-4" href="{{ route('home') }}">
        <svg class="fill-inherit" xmlns="http://www.w3.org/2000/svg" height="30" width="34" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
    </a>
</h2>

<h1 class="mb-1 text-2xl sm:text-4xl">{{ $title ?? "" }}</h1>

@auth
    <div x-data="{ dropdownOpen: false }" class="dropdown">
        <button x-on:click="dropdownOpen = !dropdownOpen" 
            class="text-white fill-white absolute 
                  right-6 top-4 hover:text-gray-200 hover:fill-gray-200
                  text-[0px] sm:text-lg" 
            id="dropdownMenuButton" aria-haspopup="true"
        >
            <svg class="inline fill-inherit" xmlns="http://www.w3.org/2000/svg" height="25" width="23" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
            {{ auth()->user()->name }}
        </button>

        <div x-show="dropdownOpen" class="dropdown-menu fixed rounded-md bg-white shadow-xl z-20 top-12 right-4">
            <form action="{{ route('logout') }}" method="get">
                @csrf
                <button class="rounded-md  block pl-4 pr-8 py-2 text-sm capitalize text-gray-800 hover:bg-gray-100">Cerrar Sesión</button>
            </form>
        </div>
    </div>   

@else  
    @if (\Request::routeIs('home'))
        <a href="{{ route('login') }}" 
            class="text-white absolute 
            right-6 top-4 hover:text-gray-200 hover:fill-gray-200
            text-lg hover:underline" 
        >
            Iniciar sesión
        </a>
    @endif
@endauth

</header>

@unless(\Request::routeIs('home'))
    <div class="mb-24"></div>
@endunless