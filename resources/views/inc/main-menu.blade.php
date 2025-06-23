<!-- Barra superior -->
<header class="fixed top-8 left-0 w-full z-50 bg-yellow-500 text-white backdrop-blur-sm shadow-sm">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
        <!-- logo -->
        <div class="flex items-center space-x-2 text-white font-bold text-lg">
            <img src="{{asset("assets/images/logogober.png")}}" alt="Logo" class="h-8 w-auto" />
            <img src="{{asset("assets/images/icono.png")}}" alt="Logo" class="h-10 w-auto" />
Chocó Travel
        </div>
        <!-- navegación -->
        <nav class="hidden lg:flex space-x-6 text-sm">
            <a href="#" class="hover:text-teal-600">Destinos</a>
            <a href="#" class="hover:text-teal-600">Borondos</a>
            <a href="#" class="hover:text-teal-600">Guías y Comercios</a>
            <a href="#" class="hover:text-teal-600">Ranking</a>
            <button class="p-1 rounded hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24"><path d="M12 4v1.79l3.71 3.71-1.42 1.42L12 8.63 9.71 10.92 8.29 9.5 12 5.79V4m0 16v-1.79l-3.71-3.71 1.42-1.42L12 15.37l2.29-2.29 1.42 1.42L12 18.21V20z" fill="currentColor"/></svg>
            </button>
        </nav>
        <!-- auth -->
        <div class="flex space-x-2 text-sm">
            <div class="fixed bottom-0" id="google_translate_element"></div>
            <button class="border px-4 py-1 rounded hover:bg-emerald-500">Iniciar Sesión</button>
            <button class="bg-emerald-500 text-white px-4 py-1 rounded hover:bg-emerald-600">Registrarse</button>
        </div>
    </div>
</header>
