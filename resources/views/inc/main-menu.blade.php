<!-- Barra superior -->
<header class="fixed top-8 left-0 w-full z-50 bg-yellow-500 text-white backdrop-blur-sm shadow-sm">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-1">
        <!-- logo -->
        <div class="flex items-center space-x-2 text-white font-bold text-lg">
            <img src="{{asset("assets/images/logogober.png")}}" alt="Logo" class="h-8 w-auto" />
            <a href="{{ request()->routeIs('home')?"#home":route('home') }}" class="flex items-center space-x-0" title="Ir a Inicio">
                <img src="{{ asset('assets/images/icono.png') }}" alt="Logo" class="h-10 w-auto" />
                <span class="font-semibold text-lg">Chocó Travel</span>
            </a>

        </div>
        <!-- navegación -->
        <nav class="hidden lg:flex space-x-6 text-sm">
            <a href="{{request()->routeIs('home')?"#home":route('home')}}" class="{{ request()->routeIs('home') ? 'text-teal-600 font-semibold' : 'hover:text-teal-600' }}">
                Inicio
            </a>
            <a href="#" class="hover:text-teal-600">Destinos</a>
            <a href="#" class="hover:text-teal-600">Borondos</a>
            <a href="#" class="hover:text-teal-600">Guías y Comercios</a>
            <a href="#indicadores" class="hover:text-teal-600">Indicadores</a>
        </nav>
        <!-- auth -->
        <div class="flex space-x-2 text-sm">
            <div class="fixed bottom-0" id="google_translate_element"></div>
            <button class="border px-4 py-1 rounded hover:bg-emerald-500">Iniciar Sesión</button>
            <button class="bg-emerald-500 text-white px-4 py-1 rounded hover:bg-emerald-600">Registrarse</button>
        </div>
    </div>
</header>
