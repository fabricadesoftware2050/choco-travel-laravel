@extends('layouts.app')
@section('title', 'Cuenta verificada')

@section('content')
    <div class="text-center min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <img src="{{ asset('assets/images/logogober.png') }}" alt="Gobernación" class="h-16 w-auto mb-4" />

        <a href="{{ route('home') }}" class="flex items-center space-x-2 mb-6" title="Ir a Inicio">
            <img src="{{ asset('assets/images/icono.png') }}" alt="Logo" class="h-10 w-auto" />
            <span class="font-semibold text-lg">Chocó Travel</span>
        </a>

        <div class="bg-white p-8 rounded shadow-lg text-center max-w-md w-full">
            <div class="mb-4">
                <svg class="mx-auto w-16 h-16 text-emerald-500" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h1 class="text-2xl font-semibold mb-2">¡Cuenta verificada!</h1>
            <p class="text-sm mb-4 text-gray-700">Gracias por confirmar tu correo electrónico. Ya puedes disfrutar de todas las funcionalidades de Chocó Travel.</p>
            <a href="{{ route('home') }}" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">
                Ir al inicio
            </a>
        </div>
    </div>
@endsection
