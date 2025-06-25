@extends('layouts.app')
@section('title', 'Página no encontrada')
@section('content')
    <div class="text-center min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <img src="{{asset("assets/images/logogober.png")}}" alt="Logo" class="h-16 w-auto" />
        <a href="{{ request()->routeIs('home')?"#home":route('home') }}" class="flex items-center space-x-0" title="Ir a Inicio">
            <img src="{{ asset('assets/images/icono.png') }}" alt="Logo" class="h-10 w-auto" />
            <span class="font-semibold text-lg">Chocó Travel</span>
        </a>
        <div class="min-h-screen flex items-center justify-center bg-red-100 text-center p-6">
            <div class="bg-white shadow-lg p-10 rounded-lg">
                <h1 class="text-2xl font-bold text-red-600 mb-4">Formulario expirado</h1>
                <p class="text-gray-700">El formulario ha expirado por inactividad o ya fue enviado.</p>
                <p class="text-sm text-gray-500 mt-2">Por favor, vuelve a intentarlo desde el inicio.</p>
                <a href="{{ route('home') }}" class="mt-6 inline-block bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">Volver al inicio</a>
            </div>
        </div>
    </div>
@endsection
