@extends('layouts.app')
@section('title', 'Recuperar contraseña')

@section('content')
    <div class="text-center min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <img src="{{ asset('assets/images/logogober.png') }}" alt="Gobernación" class="h-16 w-auto mb-4" />

        <a href="{{ route('home') }}" class="flex items-center space-x-2 mb-6" title="Ir a Inicio">
            <img src="{{ asset('assets/images/icono.png') }}" alt="Logo" class="h-10 w-auto" />
            <span class="font-semibold text-lg">Chocó Travel</span>
        </a>

        <div class="bg-white p-8 rounded shadow-lg text-center max-w-md w-full">

            <h1 class="text-2xl font-semibold mb-2">Cambiar contraseña</h1>
            <p class="text-sm mb-4 text-gray-700">Hola, <strong>{{strtoupper($name)}}</strong>, ingresa tu nueva contraseña.</p>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            @if($error=="validation.confirmed")
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
            <form method="POST" action="{{ route('change.password') }}" class="space-y-4 text-left">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-medium">Contraseña</label>
                    <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                        <i class="fas fa-lock text-gray-400 mr-2"></i>
                        <input name="password" required placeholder="Mínimo 8 caracteres" type="password" class="w-full focus:outline-none" />
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-medium">Confirmar Contraseña</label>
                    <div class="flex items-center border rounded-md px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
                        <i class="fas fa-lock text-gray-400 mr-2"></i>
                        <input required placeholder="Repita la contraseña" name="password_confirmation" type="password" class="w-full focus:outline-none" />
                    </div>
                </div>
                <input type="hidden" required name="_token_request" value="{{$token}}">

                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded">
                    Restablecer
                </button>
            </form>
        </div>
    </div>
@endsection
