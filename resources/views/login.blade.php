@extends('layouts.app')
@section('title', 'Inicio de Sesión')
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
                <h2 class="text-2xl font-bold text-center mb-4">Inicio de sesión</h2>
                <p class="text-sm text-center text-gray-600 mb-6">
                    Accede para crear experiencias, comunicarte con guías turisticos, guardar destinos favoritos y más
                </p>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('auth.login')}}" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Correo electrónico</label>
                        <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                            <i class="fas fa-envelope text-gray-400 mr-2"></i>
                            <input name="email" placeholder="Ingrese su correo" type="email" class="w-full focus:outline-none" value="{{ old('email') }}" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Contraseña</label>
                        <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                            <i class="fas fa-lock text-gray-400 mr-2"></i>
                            <input name="password" placeholder="Ingrese su contraseña" type="password" class="w-full focus:outline-none" />
                        </div>
                    </div>
                    <p class="text-sm text-end mt-4">
                        <a href="{{route('resetPassword')}}" class="text-yellow-600 underline">Restablecer contraseña</a>
                    </p>

                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Acceder</button>
                </form>
                <div class="mt-4">
                    <a href="{{route('redirect.google')}}" class="w-full border border-gray-300 py-2 rounded-md flex items-center justify-center gap-2 hover:bg-gray-100">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5" />
                        Iniciar sesión  con Google
                    </a>
                </div>
                <p class="text-sm text-center mt-4">
                    ¿Aún no tienes una cuenta? <a href="{{route('register')}}" class="text-yellow-600 underline">Crear una</a>
                </p>
                    <div class="flex items-center mt-3">
                        <label class="ml-2 block text-sm text-gray-700">Al acceder aceptas los <a href="#" class="text-yellow-600 underline">términos y condiciones</a></label>
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
