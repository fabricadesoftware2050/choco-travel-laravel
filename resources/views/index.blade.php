@extends('layouts.app')
@section('title', 'Un Borondo por el Chocó')
@section('content')
    @include("inc/popup")
    <!-- Hero -->
    <section id="home" class="relative hero bg-cover bg-center text-white" style="background-image:url('https://colombiapais.com/pagina-sol-y-playa/playas-mar-pacifico/imagenes/mar-pacifico-nuqui-panoramica-450.jpg');">
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
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg hover:bg-green-200 transition duration-300">
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
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg hover:bg-green-200 transition duration-300">
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
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg hover:bg-green-200 transition duration-300">
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
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg hover:bg-green-200 transition duration-300">
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
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg hover:bg-green-200 transition duration-300">
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
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg hover:bg-green-200 transition duration-300">
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
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg hover:bg-green-200 transition duration-300">
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
            <a href="#" class="group block bg-white rounded-lg shadow border overflow-hidden hover:shadow-lg hover:bg-green-200 transition duration-300">
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

    <!-- Crea tu Borondo -->
    <section class="max-full  px-4 bg-teal-50">
        <section class="max-w-7xl mx-auto bg-teal-50 p-5">

        <h2 class="text-xl font-bold mb-2">Crea tu Borondo</h2>
        <p class="mb-4 text-gray-700">Diseña tu itinerario personalizado combinando destinos, actividades y experiencias en el Chocó.</p>

            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-10 gap-6">

                <!-- Mapa (60%) -->
                <div class="md:col-span-6">
                    <div class="bg-white rounded-lg shadow p-6 space-y-4 h-full">
                        <div id="map" class="border border-dashed rounded h-[400px] z-10">
                            <!-- Aquí se renderiza el mapa -->
                        </div>
                        <ul class="mt-4 list-disc list-inside text-sm text-gray-700">
                            <li><strong>Día 1:</strong> Nuquí – Utría y playas</li>
                            <li><strong>Día 2:</strong> Avistamiento de ballenas</li>
                            <li><strong>Día 3:</strong> Cascada El Tigre</li>
                        </ul>
                    </div>
                </div>

                <!-- Formulario (40%) -->
                <div class="md:col-span-4">
                    <div class="bg-white rounded-lg shadow p-6 space-y-4">
                        <form>
                            <h3 class="font-semibold text-lg mb-4">Crea tu propio Borondo</h3>
                            <label>Destino Principal</label>
                            <input type="text" placeholder="Ej. Nuquí, Bahía Solano, Quibdó…" class="w-full border px-3 py-2 rounded mb-3">
                            <div class="flex flex-col sm:flex-row gap-4 mb-3">
                                <div class="flex-1">
                                    <label class="block mb-1">Duración</label>
                                    <input type="number" min="1" placeholder="Días" class="w-full border px-3 py-2 rounded" />
                                </div>
                                <div class="flex-1">
                                    <label class="block mb-1">Fecha de inicio</label>
                                    <input type="date" min="{{ date('Y-m-d') }}" class="w-full border px-3 py-2 rounded" />
                                </div>
                            </div>

                            <label>Categorías:</label>
                            <div class="flex flex-wrap gap-2 my-2">
                                <label class="inline-flex items-center px-3 py-1 rounded-full text-sm cursor-pointer bg-gray-100 text-gray-800 hover:bg-teal-100 shadow">
                                    <input type="checkbox" class="hidden peer" name="categorias[]" value="playa">
                                    <span class="peer-checked:bg-teal-600 peer-checked:text-white px-1 rounded-full"><i class="fas fa-umbrella-beach"></i> Playa</span>
                                </label>
                                <label class="inline-flex items-center px-3 py-1 rounded-full text-sm cursor-pointer bg-gray-100 text-gray-800 hover:bg-teal-100 shadow">
                                    <input type="checkbox" class="hidden peer" name="categorias[]" value="aventura">
                                    <span class="peer-checked:bg-teal-600 peer-checked:text-white px-1 rounded-full"> <i class="fas fa-hiking"></i> Aventura</span>
                                </label>

                                <label class="inline-flex items-center px-3 py-1 rounded-full text-sm cursor-pointer bg-gray-100 text-gray-800 hover:bg-teal-100 shadow">
                                    <input type="checkbox" class="hidden peer" name="categorias[]" value="cultura">
                                    <span class="peer-checked:bg-teal-600 peer-checked:text-white px-1 rounded-full"><i class="fas fa-landmark"></i> Cultura</span>
                                </label>

                                <label class="inline-flex items-center px-3 py-1 rounded-full text-sm cursor-pointer bg-gray-100 text-gray-800 hover:bg-teal-100 shadow">
                                    <input type="checkbox" class="hidden peer" name="categorias[]" value="urbano">
                                    <span class="peer-checked:bg-teal-600 peer-checked:text-white px-1 rounded-full"><i class="fas fa-city"></i> Urbano</span>
                                </label>
                                <label class="inline-flex items-center px-3 py-1 rounded-full text-sm cursor-pointer bg-gray-100 text-gray-800 hover:bg-teal-100 shadow">
                                    <input type="checkbox" class="hidden peer" name="categorias[]" value="gastronomia">
                                    <span class="peer-checked:bg-teal-600 peer-checked:text-white px-1 rounded-full"><i class="fas fa-utensils"></i> Gastronomía</span>
                                </label>
                                <label class="inline-flex items-center px-3 py-1 rounded-full text-sm cursor-pointer bg-gray-100 text-gray-800 hover:bg-teal-100 shadow">
                                    <input type="checkbox" class="hidden peer" name="categorias[]" value="paseo de río">
                                    <span class="peer-checked:bg-teal-600 peer-checked:text-white px-1 rounded-full"><i class="fas fa-water"></i> Paseo de Río</span>
                                </label>
                                <label class="inline-flex items-center px-3 py-1 rounded-full text-sm cursor-pointer bg-gray-100 text-gray-800 hover:bg-teal-100 shadow">
                                    <input type="checkbox" class="hidden peer" name="categorias[]" value="ecoturismo">
                                    <span class="peer-checked:bg-teal-600 peer-checked:text-white px-1 rounded-full"><i class="fas fa-seedling"></i> Ecoturismo</span>
                                </label>
                            </div>

                            <button class="w-full bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 mt-4"><i class="fas fa-plus"></i> Crear Mi Borondo</button>
                        </form>

                    </div>
                    <div class="bg-white rounded-lg text-gray-700 shadow text-sm p-6 space-y-4 my-2">
                        <form>
                            <h3 class="font-semibold text-lg pb-2">Contacta con un guía local</h3>
                            <p>Recibe asesoramiento personalizado de guías locales expertos del Chocó.</p>
                            <button class="w-full bg-gray-100 px-4 py-3 border font-bold rounded hover:bg-green-400 hover:text-white shadow-lg my-2">
                                <i class="fas fa-comment-dots"></i>
                                Hablar con un guía
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </section>

    </section>

    <section class="max-w-7xl mx-auto px-4 my-4">
        <h2 class="text-xl font-bold mb-6">Lo Más Visitado los últimos 30 días</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Card 1 -->


            <div class="relative bg-white border rounded-lg shadow hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <!-- Ranking y subida -->
                <!-- Ranking y subida -->
                <div class="absolute top-2 left-2 bg-green-600 bg-opacity-90 text-white text-2xl w-12 h-12 flex items-center justify-center rounded-full shadow-lg z-10">
                    1°
                </div>
                <div class="absolute top-2 right-2 bg-white text-teal-600 text-xs px-2 py-1 rounded-full flex items-center shadow">
                    <i class="fas fa-arrow-up mr-1"></i> 42%
                </div>
                <!-- Imagen -->
                <img src="https://www.esariri.com/wp-content/uploads/2022/10/IMG_7298-2-1-scaled.jpg"
                     alt="Comuna 13"
                     class="rounded-t-lg h-40 w-full object-cover" />
                <!-- Contenido -->
                <div class="p-4 space-y-2">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg">Tour Tutunendo</h3>
                        <div class="text-yellow-500 font-semibold">★ 4.9</div>
                    </div>
                    <p class="text-sm text-gray-600 flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-teal-600"></i> Tutunendo
                    </p>
                    <p class="text-sm text-gray-600">Hermosa playa del pacífico con aguas cristalinas.</p>

                    <div class="flex justify-between items-center">
                    <p class="text-sm text-gray-500 flex items-center gap-2">
                        <i class="fas fa-users text-gray-400"></i> 12.400 visitantes
                    </p>
                    <button class="mt-2 px-4 text-sm border font-bold py-2 rounded hover:bg-yellow-500 shadow"><i class="fas fa-eye"></i> Ver detalles</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white border rounded-lg shadow hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <!-- Ranking y subida -->
                <div class="absolute top-2 left-2 bg-yellow-500 bg-opacity-90 text-white text-xl w-11 h-11 flex items-center justify-center rounded-full shadow-lg z-10">
                    2°
                </div>
                <div class="absolute top-2 right-2 bg-white text-teal-600 text-xs px-2 py-1 rounded-full flex items-center shadow">
                    <i class="fas fa-arrow-up mr-1"></i> 42%
                </div>
                <!-- Imagen -->
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/d4/db/e7/getlstd-property-photo.jpg?w=500&h=-1&s=1"
                     alt="Comuna 13"
                     class="rounded-t-lg h-40 w-full object-cover" />
                <!-- Contenido -->
                <div class="p-4 space-y-2">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg">Playa Guachalito</h3>
                        <div class="text-yellow-500 font-semibold">★ 4.9</div>
                    </div>
                    <p class="text-sm text-gray-600 flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-teal-600"></i> Nuquí
                    </p>
                    <p class="text-sm text-gray-600">Hermosa playa del pacífico con aguas cristalinas.</p>

                    <div class="flex justify-between items-center">
                        <p class="text-sm text-gray-500 flex items-center gap-2">
                            <i class="fas fa-users text-gray-400"></i> 1.230 visitantes
                        </p>
                        <button class="mt-2 px-4 text-sm border font-bold py-2 rounded hover:bg-yellow-500 shadow"><i class="fas fa-eye"></i> Ver detalles</button>
                    </div>
                </div>
            </div>

            <div class="relative bg-white border rounded-lg shadow hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <!-- Ranking y subida -->

                <div class="absolute top-2 left-2 bg-orange-500 bg-opacity-90 text-white text-lg w-10 h-10 flex items-center justify-center rounded-full shadow-lg z-10">
                    3°
                </div>
                <div class="absolute top-2 right-2 bg-white text-teal-600 text-xs px-2 py-1 rounded-full flex items-center shadow">
                    <i class="fas fa-arrow-up mr-1"></i> 42%
                </div>
                <!-- Imagen -->
                <img src="https://radionacional-v3.s3.amazonaws.com/s3fs-public/node/article/field_image/colp_ext_002149.jpg"
                     alt="Comuna 13"
                     class="rounded-t-lg h-40 w-full object-cover" />
                <!-- Contenido -->
                <div class="p-4 space-y-2">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg">Tour Atrato</h3>
                        <div class="text-yellow-500 font-semibold">★ 4.9</div>
                    </div>
                    <p class="text-sm text-gray-600 flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-teal-600"></i> Quibdó
                    </p>
                    <p class="text-sm text-gray-600">Hermosa playa del pacífico con aguas cristalinas.</p>

                    <div class="flex justify-between items-center">
                        <p class="text-sm text-gray-500 flex items-center gap-2">
                            <i class="fas fa-users text-gray-400"></i> 12.400 visitantes
                        </p>
                        <button class="mt-2 px-4 text-sm border font-bold py-2 rounded hover:bg-yellow-500 shadow"><i class="fas fa-eye"></i> Ver detalles</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Experiencias Recomendadas -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-xl font-bold mb-6">Experiencias Recomendadas</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white border rounded-lg shadow overflow-hidden transform hover:scale-105 transition duration-300 cursor-pointer">
                <img src="https://radionacional-v3.s3.amazonaws.com/s3fs-public/node/article/field_image/colp_ext_002149.jpg" alt="Graffiti Comuna 13" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Tour Atrato</h3>
                    <p class="text-sm text-gray-600">Recorre los coloridos murales y conoce la transformación social del barrio.</p>
                    <div class="mt-3 flex items-center justify-between text-sm text-gray-700">
                        <span><i class="fas fa-users mr-1 text-emerald-500"></i> 8,200 visitantes</span>
                        <span><i class="fas fa-chart-line mr-1 text-blue-500"></i> +32% este mes</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white border rounded-lg shadow overflow-hidden transform hover:scale-105 transition duration-300 cursor-pointer">
                <img src="https://visitvalle.travel/wp-content/uploads/2024/08/avistamiento-de-ballenas-jorobadas-en-colombia.webp" alt="Ballenas Nuquí" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Avistamiento de ballenas (época)</h3>
                    <p class="text-sm text-gray-600">Observa estos majestuosos animales desde Nuquí o Bahía Solano.</p>
                    <div class="mt-3 flex items-center justify-between text-sm text-gray-700">
                        <span><i class="fas fa-users mr-1 text-emerald-500"></i> 5,400 visitantes</span>
                        <span><i class="fas fa-chart-line mr-1 text-blue-500"></i> +18% este mes</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white border rounded-lg shadow overflow-hidden transform hover:scale-105 transition duration-300 cursor-pointer">
                <img src="https://caracol.com.co/resizer/v2/https%3A%2F%2Fcloudfront-us-east-1.images.arcpublishing.com%2Fprisaradioco%2FFEN7X4PSMBOR7CUN2TPET5VI5M.jpg?auth=f10c0a62e098dfe76a402d02b0d14754266f9e0bb99125989f8678c72e33dc14&height=624&width=1080&quality=70&smart=true" alt="Parque Arví" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Caminata Tutunendo</h3>
                    <p class="text-sm text-gray-600">Disfruta las vistas de Tutunendo y relájate en la naturaleza djunto al río.</p>
                    <div class="mt-3 flex items-center justify-between text-sm text-gray-700">
                        <span><i class="fas fa-users mr-1 text-emerald-500"></i> 6,900 visitantes</span>
                        <span><i class="fas fa-chart-line mr-1 text-blue-500"></i> +25% este mes</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Borondos Populares -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-xl font-bold mb-6">Borondos Populares</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Quibdó Cultural
                        </h3>
                        <p class="text-sm text-gray-600">3 días • 2-4 personas</p>
                    </div>
                    <img src="https://www.clarin.com/2024/07/04/uteodLeuh_2000x1500__1.jpg" class="w-16 h-16 object-cover rounded" alt="Miniatura Medellín">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">Laura Gómez</span><br>
                        <span class="text-gray-500">👁️ 1.2K visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.9</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Aventura en Nuquí
                        </h3>
                        <p class="text-sm text-gray-600">1 día • 2-4 personas</p>
                    </div>
                    <img src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/e40b6ea6361a1abe28f32e7910f63b66/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg" class="w-16 h-16 object-cover rounded" alt="Miniatura Nuquí">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">Carlos Ruiz</span><br>
                        <span class="text-gray-500">👁️ 980 visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.8</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Vacaciones en Capurganá
                        </h3>
                        <p class="text-sm text-gray-600">5 días • 2-4 personas</p>
                    </div>
                    <img src="{{asset("assets/images/icono.png")}}" class="w-16 h-16 object-cover rounded" alt="Miniatura Chocó">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">María Torres</span><br>
                        <span class="text-gray-500">👁️ 1.5K visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.8</div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Vacaciones en Capurganá
                        </h3>
                        <p class="text-sm text-gray-600">5 días • 2-4 personas</p>
                    </div>
                    <img src="{{asset("assets/images/icono.png")}}" class="w-16 h-16 object-cover rounded" alt="Miniatura Chocó">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">María Torres</span><br>
                        <span class="text-gray-500">👁️ 1.5K visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.8</div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Vacaciones en Capurganá
                        </h3>
                        <p class="text-sm text-gray-600">5 días • 2-4 personas</p>
                    </div>
                    <img src="{{asset("assets/images/icono.png")}}" class="w-16 h-16 object-cover rounded" alt="Miniatura Chocó">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">María Torres</span><br>
                        <span class="text-gray-500">👁️ 1.5K visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.8</div>
                </div>
            </div>
<!-- Card 6 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Vacaciones en Capurganá
                        </h3>
                        <p class="text-sm text-gray-600">5 días • 2-4 personas</p>
                    </div>
                    <img src="{{asset("assets/images/icono.png")}}" class="w-16 h-16 object-cover rounded" alt="Miniatura Chocó">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">María Torres</span><br>
                        <span class="text-gray-500">👁️ 1.5K visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.8</div>
                </div>
            </div>
<!-- Card 4 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Vacaciones en Capurganá
                        </h3>
                        <p class="text-sm text-gray-600">5 días • 2-4 personas</p>
                    </div>
                    <img src="{{asset("assets/images/icono.png")}}" class="w-16 h-16 object-cover rounded" alt="Miniatura Chocó">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">María Torres</span><br>
                        <span class="text-gray-500">👁️ 1.5K visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.8</div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Vacaciones en Capurganá
                        </h3>
                        <p class="text-sm text-gray-600">5 días • 2-4 personas</p>
                    </div>
                    <img src="{{asset("assets/images/icono.png")}}" class="w-16 h-16 object-cover rounded" alt="Miniatura Chocó">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">María Torres</span><br>
                        <span class="text-gray-500">👁️ 1.5K visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.8</div>
                </div>
            </div>
<!-- Card 6 -->
            <div class="bg-white border rounded-lg shadow p-4 hover:shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg flex items-center">
                            Vacaciones en Capurganá
                        </h3>
                        <p class="text-sm text-gray-600">5 días • 2-4 personas</p>
                    </div>
                    <img src="{{asset("assets/images/icono.png")}}" class="w-16 h-16 object-cover rounded" alt="Miniatura Chocó">
                </div>
                <div class="flex justify-between items-center mt-4 text-sm text-gray-700">
                    <div>
                        <span class="text-gray-500">Publicado por:</span> <span class="font-semibold">María Torres</span><br>
                        <span class="text-gray-500">👁️ 1.5K visitas</span>
                    </div>
                    <div class="text-yellow-500 text-lg font-semibold">★ 4.8</div>
                </div>
            </div>

        </div>
    </section>

    <section id="indicadores" class="bg-gray-900 text-white py-20 shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 pt-5">Indicadores Estratégicos del Turismo – Gobernación del Chocó</h2>

            <!-- Primer bloque de estadísticas resumidas -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center mb-16">
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="text-4xl font-bold text-teal-400">+120K</div>
                    <p class="mt-2 text-gray-300">Proyección de Visitantes</p>
                    <p class="text-sm text-teal-300 mt-1">+35% vs. 2024</p>
                </div>
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="text-4xl font-bold text-yellow-400">$5.4M</div>
                    <p class="mt-2 text-gray-300">Gasto público en turismo</p>
                    <p class="text-sm text-yellow-300 mt-1">Inversión total 2025</p>
                </div>
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="text-4xl font-bold text-green-400">$9.6M</div>
                    <p class="mt-2 text-gray-300">Ganancias esperadas</p>
                    <p class="text-sm text-green-300 mt-1">Por turismo formal</p>
                </div>
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:scale-105 transform transition duration-300">
                    <div class="text-4xl font-bold text-pink-400">15</div>
                    <p class="mt-2 text-gray-300">Municipios turísticos activos</p>
                    <p class="text-sm text-pink-300 mt-1">Nuquí, Quibdó, Bahía Solano…</p>
                </div>
            </div>

            <!-- Segundo bloque de tablero con más detalle -->
            <div class="bg-gray-800 rounded-xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-700 text-center">

                    <!-- Duración promedio -->
                    <div class="p-6 hover:bg-gray-700 transition duration-300">
                        <p class="text-sm uppercase text-gray-400">Duración promedio</p>
                        <div class="text-3xl font-semibold text-blue-400 mt-2">4.2 días</div>
                        <p class="text-xs text-blue-300 mt-1">Por visitante</p>
                    </div>

                    <!-- Operadores turísticos -->
                    <div class="p-6 hover:bg-gray-700 transition duration-300">
                        <p class="text-sm uppercase text-gray-400">Operadores registrados</p>
                        <div class="text-3xl font-semibold text-orange-400 mt-2">89</div>
                        <p class="text-xs text-orange-300 mt-1">Agencias, guías, ecohostales</p>
                    </div>

                    <!-- Visitantes extranjeros -->
                    <div class="p-6 hover:bg-gray-700 transition duration-300">
                        <p class="text-sm uppercase text-gray-400">Visitantes internacionales</p>
                        <div class="text-3xl font-semibold text-indigo-400 mt-2">21%</div>
                        <p class="text-xs text-indigo-300 mt-1">EE.UU, Alemania, Francia</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-700 text-center">
                    <!-- Ingresos por tipo de experiencia -->
                    <div class="p-6 hover:bg-gray-700 transition duration-300">
                        <p class="text-sm uppercase text-gray-400">Top categorías</p>
                        <div class="text-3xl font-semibold text-cyan-400 mt-2">Eco • Mar • Cultura</div>
                        <p class="text-xs text-cyan-300 mt-1">Playas, senderismo, historia</p>
                    </div>

                    <!-- Valor agregado proyectado -->
                    <div class="p-6 hover:bg-gray-700 transition duration-300">
                        <p class="text-sm uppercase text-gray-400">Valor agregado proyectado</p>
                        <div class="text-3xl font-semibold text-lime-400 mt-2">$2.3M</div>
                        <p class="text-xs text-lime-300 mt-1">En comercio local y empleo</p>
                    </div>

                    <!-- Eventos programados 2025 -->
                    <div class="p-6 hover:bg-gray-700 transition duration-300">
                        <p class="text-sm uppercase text-gray-400">Eventos 2025</p>
                        <div class="text-3xl font-semibold text-red-400 mt-2">37</div>
                        <p class="text-xs text-red-300 mt-1">Carnavales, festivales, ferias</p>
                    </div>
                </div>
            </div>

            <!-- Bloque: Apoyo de la Gobernación al Turismo -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">

                <!-- Programas activos -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:bg-gray-700 transition">
                    <div class="text-3xl font-bold text-amber-400">12</div>
                    <p class="mt-2 text-gray-300">Programas de fomento al turismo</p>
                    <p class="text-sm text-amber-300 mt-1">Infraestructura, promoción, formación</p>
                </div>

                <!-- Operadores capacitados -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:bg-gray-700 transition">
                    <div class="text-3xl font-bold text-sky-400">+320</div>
                    <p class="mt-2 text-gray-300">Operadores capacitados 2024-25</p>
                    <p class="text-sm text-sky-300 mt-1">Cursos, talleres, certificaciones</p>
                </div>

                <!-- Créditos entregados -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:bg-gray-700 transition">
                    <div class="text-3xl font-bold text-violet-400">$950K</div>
                    <p class="mt-2 text-gray-300">Créditos turísticos entregados</p>
                    <p class="text-sm text-violet-300 mt-1">Para ecohostales, agencias y emprendimientos</p>
                </div>

                <!-- Eventos institucionales -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:bg-gray-700 transition">
                    <div class="text-3xl font-bold text-rose-400">8</div>
                    <p class="mt-2 text-gray-300">Foros y ruedas de negocio</p>
                    <p class="text-sm text-rose-300 mt-1">Con aliados como Fontur y MinComercio</p>
                </div>

                <!-- Alianzas estratégicas -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:bg-gray-700 transition">
                    <div class="text-3xl font-bold text-lime-400">6</div>
                    <p class="mt-2 text-gray-300">Convenios activos con aliados</p>
                    <p class="text-sm text-lime-300 mt-1">Universidades, SENA, ONGs, agencias</p>
                </div>

                <!-- Subsidios e incentivos -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:bg-gray-700 transition">
                    <div class="text-3xl font-bold text-fuchsia-400">+80</div>
                    <p class="mt-2 text-gray-300">Operadores con incentivos activos</p>
                    <p class="text-sm text-fuchsia-300 mt-1">Subsidios para promoción y logística</p>
                </div>
            </div>

        </div>
    </section>


@endsection
@section("js")
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Coordenadas
        const lat = 5.695675;
        const lon = -76.6658927;

        // Inicializar mapa
        const map = L.map('map').setView([5.6942621,-76.6570839], 7);


        // Agregar marcador
        L.marker([5.7446162, -76.5451519]).addTo(map)
            .bindPopup("Tutunendo")
            .openPopup();
        L.marker([5.6246542, -76.7491975]).addTo(map)
            .bindPopup("Playa San Isidro")
            .openPopup();
        L.marker([5.7095741,-77.2718473]).addTo(map)
            .bindPopup("Nuquí")
            .openPopup();
        L.marker([8.6348311,-77.3602469]).addTo(map)
            .bindPopup("Capurganá (Acandí)")
            .openPopup();
        L.marker([5.6942621,-76.6570839]).addTo(map)
            .bindPopup("Quibdó (Capital)")
            .openPopup();
        // Añadir capa de mapa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
    </script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
    @if (session('nuevo'))
        <!-- Script para mostrar una vez -->
        <script>
            document.addEventListener("DOMContentLoaded", () => {

                    confetti({
                        particleCount: 250,
                        spread: 200,
                        origin: { y: 0.6 }
                    });
            });


        </script>
        <!-- CDN de confetti -->
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    @endif

@endsection
