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
                <p class="text-md text-center text-gray-600 mb-6">
                    Regístrate para crear experiencias, comunicarte con guías turisticos, guardar destinos favoritos y más
                </p>
                <div id="message" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 hidden">

                </div>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                @if($error=="validation.unique")
                                    <li>{{ str_replace("validation.unique", "Ya existe una cuenta con este correo", $error)}}</li>
                                @elseif($error=="validation.confirmed")
                                    <li>{{ str_replace("validation.confirmed", "Las contraseñas no coinciden", $error)}}</li>
                                @elseif($error=="validation.min.string")
                                    <li>{{ str_replace("validation.min.string", "La contraseña debe ser mínimo de 8 caracteres", $error)}}</li>
                                @else
                                    <li>{{ $error}}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="registerForm" method="post" action="{{route('auth.register')}}" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Nombre completo</label>
                        <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                            <i class="fas fa-user text-gray-400 mr-2"></i>
                            <input id="input_name" name="name" required type="text" placeholder="Tu nombre completo" class="w-full focus:outline-none" value="{{ old('name') }}" />
                        </div>
                    </div>



                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Correo electrónico</label>
                        <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                            <i class="fas fa-envelope text-gray-400 mr-2"></i>
                            <input id="input_email" name="email" required placeholder="Ingrese su correo" type="email" class="w-full focus:outline-none" value="{{ old('email') }}" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Contraseña</label>
                        <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                            <i class="fas fa-lock text-gray-400 mr-2"></i>
                            <input id="input_password" name="password" required placeholder="Mínimo 8 caracteres" type="password" class="w-full focus:outline-none" />
                            <i class="fas fa-eye-slash text-gray-400 mr-2 cursor-pointer" onclick="showPassword()"></i>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Confirmar Contraseña</label>
                        <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                            <i class="fas fa-lock text-gray-400 mr-2"></i>
                            <input required id="input_password_confirm" placeholder="Repita la contraseña" name="password_confirmation" type="password" class="w-full focus:outline-none" />
                            <i class="fas fa-eye-slash text-gray-400 mr-2 cursor-pointer" onclick="showPassword()"></i>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="terms" required name="terms" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                        <label for="terms" class="ml-2 block text-sm text-gray-700">Acepto los <a href="#" class="text-yellow-600 underline">términos y condiciones</a></label>
                    </div>
                    <button type="button" onclick="doRegister()" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Crear cuenta</button>
                </form>

                <div class="mt-4">
                    <a href="{{route('redirect.google')}}" class="w-full border border-gray-300 py-2 rounded-md flex items-center justify-center gap-2 hover:bg-gray-100">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5" />
                        Registrarme con cuenta Google
                    </a>
                </div>
                <p class="text-sm text-center mt-4">
                    ¿Ya tienes una cuenta? <a href="{{route('login')}}" class="text-yellow-600 underline">Iniciar sesión</a>
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

        function doRegister() {

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const email = $('#input_email').val();
            const password = $('#input_password').val();
            const name = $('#input_name').val();
            const confirmPassword = $('#input_password_confirm').val();
            const termsChecked = $('#terms').is(':checked');

            $('#message').hide(); // Ocultamos el mensaje por defecto

            if (email && password && name && termsChecked) {
                $('#spinner').show();
                $('#registerForm').submit();
            } else if (!emailRegex.test(email)) {
                $('#message')
                    .html(`<ul class="list-disc pl-5">
                    <li>El correo no tiene el formato correcto</li>
                  </ul>`)
                    .show();
            }else if (password!=confirmPassword) {
                $('#message')
                    .html(`<ul class="list-disc pl-5">
                    <li>Las contraseñas no coinciden.</li>
                  </ul>`)
                    .show();
            } else if (!termsChecked) {
                $('#message')
                    .html(`<ul class="list-disc pl-5">
                    <li>Debe aceptar los términos.</li>
                  </ul>`)
                    .show();
            } else {
                $('#message')
                    .html(`<ul class="list-disc pl-5">
                    <li>Todos los campos son obligatorios</li>
                  </ul>`)
                    .show();
            }
        }

        function showPassword() {
            const $input = $('#input_password');
            const type = $input.attr('type') === 'password' ? 'text' : 'password';
            $input.attr('type', type);
            $('#input_password_confirm').attr('type', type);
        }


    </script>
@endsection
