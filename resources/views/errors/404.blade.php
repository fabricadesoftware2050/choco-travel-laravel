@extends('layouts.app')
@section('title', 'Página no encontrada')
@section('content')
    <div class="text-center min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <img src="{{asset("assets/images/logogober.png")}}" alt="Logo" class="h-16 w-auto" />
        <a href="{{ request()->routeIs('home')?"#home":route('home') }}" class="flex items-center space-x-0" title="Ir a Inicio">
            <img src="{{ asset('assets/images/icono.png') }}" alt="Logo" class="h-10 w-auto" />
            <span class="font-semibold text-lg">Chocó Travel</span>
        </a>
        <h1 class="text-6xl font-bold text-yellow-500 mt-8">404</h1>
        <p class="text-xl text-gray-700 mt-4">Oops, esta página no existe.</p>
        <a href="{{ route('home') }}" class="mt-6 px-16 bg-yellow-600 text-white py-2 rounded-md hover:bg-yellow-700">Volver al inicio</a>
    </div>
@endsection
