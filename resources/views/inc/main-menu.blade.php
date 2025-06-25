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
            <a href="#indicadores" class="hover:text-teal-600">Indicadores</a>
            <a href="#" class="hover:text-teal-600">Destinos</a>
            <a href="#" class="hover:text-teal-600">Borondos</a>
            <a href="#" class="hover:text-teal-600">Guías y Comercios</a>
        </nav>
        <!-- auth -->
        <div class="flex space-x-2 text-sm">
            <div class="fixed bottom-0" id="google_translate_element"></div>
            @if(auth()->user())
                <button title="Editar perfil" class="flex items-center gap-2 px-4 py-1 bg-emerald-500 rounded text-white">
                    @if(auth()->user()->avatar)
                        <img src="{{ auth()->user()->avatar }}" class="h-5 w-5 rounded-full" alt="Avatar">
                    @endif
                    <span>{{ auth()->user()->name }}</span>
                </button>

                <a href="{{route('logout.user')}}" class="bg-red-500 text-white px-4 py-1 rounded">Cerrar sesión</a>
            @else
            <a href="{{route('login')}}" class="border px-4 py-1 rounded hover:bg-emerald-500">Iniciar Sesión</a>
            <a href="{{route('register')}}" class="bg-emerald-500 text-white px-4 py-1 rounded hover:bg-emerald-600">Registrarse</a>
            @endif
        </div>
    </div>
</header>
@if(session('error'))
    <div class="fixed top-20 left-0 w-full z-50 bg-red-100 bg-opacity-50 border border-red-400 text-red-800 px-4 py-3 flex items-center justify-between" role="alert">
        <span class="font-semibold">{{session('error')}}</span>
    </div>
@elseif(session('message'))
    <div class="fixed top-20 left-0 w-full z-50 bg-blue-100 bg-opacity-50 border border-blue-400 text-blue-800 px-4 py-3 flex items-center justify-between" role="alert">
        <span class="font-semibold">{{session('message')}}</span>
    </div>
@elseif(auth()->user() && auth()->user()->email_verified_at==null)
    <div class="fixed top-20 left-0 w-full z-50 bg-yellow-100 bg-opacity-60 border border-yellow-400 px-4 py-1 flex items-center justify-between" role="alert">
        <div>
            <span class="font-semibold">¡Verifica tu cuenta!</span>
            <span class="ml-2 text-sm">Hemos enviado un enlace de verificación a tu correo <strong>{{auth()->user()->email}}</strong>. Si no lo encuentras, revisa la bandeja de spam.</span>
        </div>
        <a href="{{ route('resend.verification') }}" class="ml-4 inline-flex items-center bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium px-4 py-2 rounded">
            Reenviar
        </a>
    </div>

@endif
