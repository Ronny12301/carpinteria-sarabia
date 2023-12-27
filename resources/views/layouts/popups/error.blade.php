@if (session('error'))
    <div x-data="{ open: true }"
        x-show="open" xtransition
        x-transition:enter.duration.500ms
        x-transition:leave.duration.400ms
        x-init="setTimeout(() => open = false, 2000)"
        class="bg-red-700 border-gray-100 border-2 
            text-center text-2xl px-5 font-principal py-1
            absolute m-auto left-5 right-5 top-24 z-50 text-white
            shadow-lg rounded-xl" 
            role="alert"
    >
        {{ session('error') }}
    </div>
@endif