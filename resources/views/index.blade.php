@extends('layouts.app')
@section('title', 'Gobernación del Chocó')
@section('content')
    <!-- Hero -->
    <section class="relative hero bg-cover bg-center text-white" style="background-image:url('https://colombiapais.com/pagina-sol-y-playa/playas-mar-pacifico/imagenes/mar-pacifico-nuqui-panoramica-450.jpg');">
        <!-- Overlay oscuro -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/60 to-white z-0"></div>

        <!-- Contenido -->
        <div class="relative z-10 flex flex-col items-center text-center max-w-3xl mx-auto pt-24 pb-20 px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-3">Un Borondo por el Chocó</h1>
            <p class="text-lg md:text-xl mb-8">Descubre la magia del Pacífico colombiano y la vibrante cultura del Chocó:<br>naturaleza, cultura y experiencias auténticas</p>

            <!-- Buscador -->
            <div class="w-full max-w-lg">
                <div class="flex bg-white rounded-lg shadow-md overflow-hidden">
                    <!-- icono lupa -->
                    <span class="flex items-center px-3 text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10.5A6.5 6.5 0 104 10.5a6.5 6.5 0 0013 0z" />
          </svg>
        </span>
                    <input type="text" value="is" class="flex-grow px-2 py-2 text-gray-700 focus:outline-none" />
                    <!-- icono X -->
                    <button class="px-3 text-gray-400 hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="currentColor"/></svg>
                    </button>
                    <button class="bg-emerald-500 hover:bg-emerald-600 text-white text-sm px-4">Buscar</button>
                </div>

                <!-- Resultados -->
                <div class="mt-2 bg-white text-black rounded-lg shadow-lg border overflow-hidden">
                    <p class="px-6 py-3 text-sm text-gray-600 border-b">2 resultados para “<span class="font-semibold">is</span>”</p>
                    <div class="divide-y">
                        <!-- resultado 1 -->
                        <div class="flex items-start p-4 hover:bg-green-50">
                            <div class="w-12 h-12 bg-gray-200 rounded mr-4 flex items-center justify-center text-xs text-gray-400">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/582789968.jpg?k=102e22cc1a4a58d036d7966e26239d370ccc47fd056d8e6d2ea8faeb0873bb44&o=&hp=1"
                                     alt="Comuna 13" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="flex-grow">
                                <h3 class="font-semibold">Playa Guachalito</h3>
                                <p class="text-xs text-gray-500">Nuquí – Hermosa playa de arena dorada con aguas cristalinas…</p>
                            </div>
                            <span class="ml-4 bg-black text-white text-xs px-2 py-1 rounded-full">Playa</span>
                        </div>
                        <!-- resultado 2 -->
                        <div class="flex items-start p-4 hover:bg-gray-50">
                            <div class="w-12 h-12 bg-gray-200 rounded mr-4 flex items-center justify-center text-xs text-gray-400">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/582789968.jpg?k=102e22cc1a4a58d036d7966e26239d370ccc47fd056d8e6d2ea8faeb0873bb44&o=&hp=1"
                                     alt="Comuna 13" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="flex-grow">
                                <h3 class="font-semibold">Cabaña Nuquí</h3>
                                <p class="text-xs text-gray-500">Nuquí – Zona exclusiva con restaurantes gourmet…</p>
                            </div>
                            <span class="ml-4 bg-black text-white text-xs px-2 py-1 rounded-full">Mar</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Destinos Destacados -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Destinos Destacados</h2>
            <a href="#" class="text-sm text-teal-600 hover:underline">Ver todos →</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4 mt-10">

            <!-- Card 1 -->
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://choco7dias.com/wp-content/uploads/2020/12/quibdo-malecon-esclinatas-colores-choco.jpg"
                         alt="Comuna 13" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">Cultural</span>
                </div>
                <div class="p-4 space-y-1">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-sm text-gray-800">Centro de Quibdó</h3>
                        <div class="flex items-center text-sm text-yellow-500 font-semibold">
                            ★ <span class="ml-1 text-gray-800">4.9</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500">📍 Quibdó</p>
                    <p class="text-sm text-gray-600 line-clamp-2">Barrio transformado con coloridos murales, escaleras eléctricas al aire libre y una...</p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://i.ytimg.com/vi/SKU17uiE7yQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCNTPqlkKgEigwQOJa4IDV2VdqnXw"
                         alt="Medellín" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">Urbano</span>
                </div>
                <div class="p-4 space-y-1">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-sm text-gray-800">Discotecas</h3>
                        <div class="flex items-center text-sm text-yellow-500 font-semibold">
                            ★ <span class="ml-1 text-gray-800">4.8</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500">📍 Quibdó</p>
                    <p class="text-sm text-gray-600 line-clamp-2">La ciudad de la eterna primavera, conocida por su clima agradable, innovación urban...</p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/582789968.jpg?k=102e22cc1a4a58d036d7966e26239d370ccc47fd056d8e6d2ea8faeb0873bb44&o=&hp=1"
                         alt="Playa Guachalito" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">Playa</span>
                </div>
                <div class="p-4 space-y-1">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-sm text-gray-800">Playa Guachalito</h3>
                        <div class="flex items-center text-sm text-yellow-500 font-semibold">
                            ★ <span class="ml-1 text-gray-800">4.8</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500">📍 Nuquí</p>
                    <p class="text-sm text-gray-600 line-clamp-2">Hermosa playa de arena dorada con aguas cristalinas, ideal para el avistamiento de...</p>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/5a/bb/84/caption.jpg?w=1200&h=-1&s=1"
                         alt="Cascada El Tigre" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">Naturaleza</span>
                </div>
                <div class="p-4 space-y-1">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-sm text-gray-800">Cascada El Tigre</h3>
                        <div class="flex items-center text-sm text-yellow-500 font-semibold">
                            ★ <span class="ml-1 text-gray-800">4.7</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500">📍 Bahía Solano</p>
                    <p class="text-sm text-gray-600 line-clamp-2">Impresionante cascada en medio de la selva chocoana, perfecta para un baño...</p>
                </div>
            </a>
            <!-- Card 5 -->
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://ecoglobalexpeditions.com/wp-content/uploads/2024/11/Capurgana-portada.jpg"
                         alt="Comuna 13" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">Playa</span>
                </div>
                <div class="p-4 space-y-1">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-sm text-gray-800">Capurganá</h3>
                        <div class="flex items-center text-sm text-yellow-500 font-semibold">
                            ★ <span class="ml-1 text-gray-800">4.9</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500">📍 Acandí</p>
                    <p class="text-sm text-gray-600 line-clamp-2">Barrio transformado con coloridos murales, escaleras eléctricas al aire libre y una...</p>
                </div>
            </a>

            <!-- Card 6 -->
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/c6/6f/dc/parque-nacional-natural.jpg"
                         alt="Medellín" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">Naturaleza</span>
                </div>
                <div class="p-4 space-y-1">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-sm text-gray-800">Parque Nacional Utría</h3>
                        <div class="flex items-center text-sm text-yellow-500 font-semibold">
                            ★ <span class="ml-1 text-gray-800">4.8</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500">📍 Bahía Solano</p>
                    <p class="text-sm text-gray-600 line-clamp-2">La ciudad de la eterna primavera, conocida por su clima agradable, innovación urban...</p>
                </div>
            </a>

            <!-- Card 7 -->
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM4cGg6lcl1aEmlm9KQyZC5vA2OTAtAlqYdg&s"
                         alt="Playa Guachalito" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">Playa</span>
                </div>
                <div class="p-4 space-y-1">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-sm text-gray-800">Playa El Almejal</h3>
                        <div class="flex items-center text-sm text-yellow-500 font-semibold">
                            ★ <span class="ml-1 text-gray-800">4.8</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500">📍 Bahía Solano</p>
                    <p class="text-sm text-gray-600 line-clamp-2">Hermosa playa de arena dorada con aguas cristalinas, ideal para el avistamiento de...</p>
                </div>
            </a>

            <!-- Card 8 -->
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative h-36 overflow-hidden">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/8d/e7/54/piedra-del-diablo-principal.jpg"
                         alt="Cascada El Tigre" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-2 right-2 bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">Naturaleza</span>
                </div>
                <div class="p-4 space-y-1">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-sm text-gray-800">Tour Tutunendo</h3>
                        <div class="flex items-center text-sm text-yellow-500 font-semibold">
                            ★ <span class="ml-1 text-gray-800">4.7</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500">📍 Tutunendo</p>
                    <p class="text-sm text-gray-600 line-clamp-2">Impresionante cascada en medio de la selva chocoana, perfecta para un baño...</p>
                </div>
            </a>

        </div>

    </section>

@endsection
