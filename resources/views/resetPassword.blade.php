@extends('layouts.app')
@section('title', 'Reestablecer Contraseña')
@section('content')
    @include("inc/popup")
    <div class="min-h-screen flex items-center justify-center bg-yellow-400 bg-opacity-80 px-4 py-2">
        <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden max-w-4xl w-full">

            <!-- Imagen con overlay -->
            <div class="relative md:w-1/2 hidden md:block">
                <img src="https://www.tomplanmytrip.com/wp-content/uploads/2024/08/La-miel-From-Sapzurro-Colombia-West-Caribbean-Coast-1.jpg" alt="Imagen turística" class="h-full w-full object-cover" />
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
                    <div class="text-center px-4">
                        <h2 class="text-white text-2xl font-bold mb-2">Recupera tu acceso</h2>
                        <p class="text-gray-200 text-sm">Te ayudamos a volver a conectarte con tus viajes soñados en Chocó Travel</p>
                    </div>
                </div>
            </div>

            <!-- Formulario a la derecha -->
            <div class="w-full md:w-1/2 p-6">
                <h2 class="text-2xl font-bold text-center mb-4">¿Olvidaste tu contraseña?</h2>
                <p class="text-sm text-center text-gray-600 mb-6">
                    Ingresa tu correo electrónico y te enviaremos un enlace para restablecerla.
                </p>

                <form method="POST" action="{{ route('resetPassword') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Correo electrónico</label>
                        <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                            <i class="fas fa-envelope text-gray-400 mr-2"></i>
                            <input name="email" type="email" placeholder="tu@correo.com" required class="w-full focus:outline-none" />
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Enviar enlace</button>
                </form>

                <p class="text-sm text-center mt-4">
                    <a href="{{ route('login') }}" class="text-yellow-600 underline">Volver al inicio de sesión</a>
                </p>
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
