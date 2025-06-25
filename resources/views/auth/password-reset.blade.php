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

            <h1 class="text-2xl font-semibold mb-2">Reestablecer contraseña</h1>
            <p class="text-sm mb-4 text-gray-700">Ingresa tu correo electrónico para recibir un enlace de recuperación.</p>
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
            <form method="POST" action="{{ route('password.email') }}" class="space-y-4 text-left">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input type="email" name="email" id="email" placeholder="Correo electrónico de su cuenta" required autofocus
                           class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded">
                    Restablecer
                </button>

            </form>
        </div>
    </div>
@endsection
