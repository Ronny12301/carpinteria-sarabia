@if (session('success'))
    <div x-data="{ open: true }"
        x-show="open" xtransition
        x-transition:enter.duration.500ms
        x-transition:leave.duration.400ms
        x-init="setTimeout(() => open = false, 2000)"
        class="bg-slate-50 border-cafe-sarabia border-2 
            text-center text-2xl px-5 font-principal
            absolute m-auto left-5 right-5 top-24 z-50 text-cafe-sarabia-hover
            shadow-lg rounded-xl" 
            role="alert"
    >
        {{ session('success') }}
    </div>
@endif