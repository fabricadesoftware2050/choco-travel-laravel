@extends('layouts.app')
@section('title', 'Verificación enviada')
@section('content')
    <div class="text-center min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <img src="{{asset("assets/images/logogober.png")}}" alt="Logo" class="h-16 w-auto" />
        <a href="{{ request()->routeIs('home')?"#home":route('home') }}" class="flex items-center space-x-0" title="Ir a Inicio">
            <img src="{{ asset('assets/images/icono.png') }}" alt="Logo" class="h-10 w-auto" />
            <span class="font-semibold text-lg">Chocó Travel</span>
        </a>
        <div class="bg-white p-8 rounded shadow-lg text-center max-w-md w-full">
            <div class="mb-4">
                <svg class="mx-auto w-16 h-16 text-emerald-500" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9zm-5.5-3.5L9 15l-2.5-2.5" />
                </svg>
            </div>
            <h1 class="text-2xl font-semibold mb-2">¡Revisa tu correo!</h1>
            <p class="text-sm mb-4">Te hemos enviado un enlace a <strong>{{auth()->user()->email}}</strong> para verificar tu cuenta.</p>
            <p class="text-sm text-gray-500 mb-6">Si no lo encuentras, revisa la carpeta de spam o espera unos minutos.</p>
            <a href="{{ route('home') }}" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">
                Volver al inicio
            </a>
        </div>
    </div>
@endsection
