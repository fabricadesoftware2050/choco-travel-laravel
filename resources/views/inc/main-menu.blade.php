<!-- Barra superior -->
<header class="fixed top-8 left-0 w-full z-50 bg-yellow-500 text-white backdrop-blur-sm shadow-sm">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-1">
        <!-- Logo -->
        <div class="flex items-center space-x-2 text-white font-bold text-lg">
            <img src="{{ asset('assets/images/logogober.png') }}" alt="Logo" class="h-8 w-auto" />
            <a href="{{ request()->routeIs('home') ? '#home' : route('home') }}" class="flex items-center space-x-0" title="Ir a Inicio">
                <img src="{{ asset('assets/images/icono.png') }}" alt="Logo" class="h-10 w-auto" />
                <span class="font-semibold text-lg">Chocó Travel</span>
            </a>
        </div>

        <!-- Botón hamburguesa (solo móvil) -->
        <button id="menu-toggle" class="lg:hidden focus:outline-none">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navegación -->
        <nav id="main-menu" class="hidden lg:flex lg:items-center space-x-6 text-sm">
            <a href="{{ request()->routeIs('home') ? '#home' : route('home') }}"
               class="{{ request()->routeIs('home') ? 'text-teal-600 font-semibold' : 'hover:text-teal-600' }}">
                Inicio
            </a>
            <a href="#indicadores" class="hover:text-teal-600">Indicadores</a>
            <a href="#" class="hover:text-teal-600">Destinos</a>
            <a href="#" class="hover:text-teal-600">Borondos</a>
            <a href="#" class="hover:text-teal-600">Guías y Comercios</a>
        </nav>

        <!-- Auth -->
        <div class="hidden lg:flex space-x-2 text-sm">
            @if(auth()->user())
                <button title="Editar perfil" class="flex items-center gap-2 px-4 py-1 bg-emerald-500 rounded text-white">
                    @if(auth()->user()->avatar)
                        <img src="{{ auth()->user()->avatar }}" class="h-5 w-5 rounded-full" alt="Avatar">
                    @endif
                    <span>{{ auth()->user()->name }}</span>
                </button>
                <a href="{{ route('logout.user') }}" class="bg-red-500 text-white px-4 py-1 rounded">Cerrar sesión</a>
            @else
                <a href="{{ route('login') }}" class="border px-4 py-1 rounded hover:bg-emerald-500">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="bg-emerald-500 text-white px-4 py-1 rounded hover:bg-emerald-600">Registrarse</a>
            @endif
        </div>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="lg:hidden hidden px-4 pb-4">
        <nav class="flex flex-col space-y-2 text-sm">
            <a href="{{ request()->routeIs('home') ? '#home' : route('home') }}" class="hover:text-teal-600">Inicio</a>
            <a href="#indicadores" class="hover:text-teal-600">Indicadores</a>
            <a href="#" class="hover:text-teal-600">Destinos</a>
            <a href="#" class="hover:text-teal-600">Borondos</a>
            <a href="#" class="hover:text-teal-600">Guías y Comercios</a>

            <div class="mt-4 space-y-2">
                @if(auth()->user())
                    <span class="block font-semibold">{{ auth()->user()->name }}</span>
                    <a href="{{ route('logout.user') }}" class="block bg-red-500 text-white px-4 py-1 rounded text-center">Cerrar sesión</a>
                @else
                    <a href="{{ route('login') }}" class="block border px-4 py-1 rounded text-center hover:bg-emerald-500">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="block bg-emerald-500 text-white px-4 py-1 rounded text-center hover:bg-emerald-600">Registrarse</a>
                @endif
            </div>
        </nav>
    </div>
</header>

<!-- Script -->
<script>
    const toggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mainMenu = document.getElementById('main-menu');

    toggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
