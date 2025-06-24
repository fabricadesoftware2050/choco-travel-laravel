@extends('layouts.app')
@section('title', 'Crear Cuenta')
@section('content')
    @include("inc/popup")
    <div class="min-h-screen flex items-center justify-center bg-yellow-400 bg-opacity-80 px-4 py-8">
        <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden max-w-4xl w-full">

            <!-- Imagen con overlay a la izquierda -->
            <div class="relative md:w-1/2 hidden md:block">
                <img src="https://www.tomplanmytrip.com/wp-content/uploads/2024/08/La-miel-From-Sapzurro-Colombia-West-Caribbean-Coast-1.jpg" alt="Imagen turística" class="h-full w-full object-cover" />

                <!-- Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
                    <div class="text-center px-4">
                        <h2 class="text-white text-2xl font-bold mb-2">Sé parte de Chocó Travel</h2>
                        <p class="text-gray-200 text-sm">Descubre destinos increíbles, conecta con otros viajeros, emprende y vive la magia del Chocó</p>
                    </div>
                </div>
            </div>


            <!-- Formulario a la derecha -->
            <div class="w-full md:w-1/2 p-6">
                <h2 class="text-2xl font-bold text-center mb-4">Crear cuenta</h2>
                <p class="text-sm text-center text-gray-600 mb-6">
                    Regístrate para crear experiencias, comunicarte con guías turisticos, guardar destinos favoritos y más
                </p>
                <form method="post" action="{{route('login')}}" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Nombre completo</label>
                        <input type="text" placeholder="Tu nombre completo" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Correo electrónico</label>
                        <input type="email" placeholder="tu@correo.com" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Contraseña</label>
                        <input type="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Confirmar contraseña</label>
                        <input type="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                        <label class="ml-2 block text-sm text-gray-700">Acepto los <a href="#" class="text-blue-600 underline">términos y condiciones</a></label>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Crear cuenta</button>
                </form>
                <p class="text-sm text-center mt-4">
                    ¿Ya tienes una cuenta? <a href="{{route('login')}}" class="text-blue-600 underline">Iniciar sesión</a>
                </p>
                <div class="mt-4">
                    <button class="w-full border border-gray-300 py-2 rounded-md flex items-center justify-center gap-2 hover:bg-gray-100">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5" />
                        Continuar con Google
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("js")
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    </script>


@endsection
