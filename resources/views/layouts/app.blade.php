<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="minimal" data-theme-colors="default" data-bs-theme="light" data-layout-width="fluid" data-layout-position="scrollable" data-layout-style="default" data-body-image="none" data-sidebar-visibility="show">
<head>
    <meta charset="utf-8">
    <title>CHOCÓ TRAVEL - @yield('title','Un Borondo por el Chocó')</title>
    <!-- SEO Básico -->
    <meta name="description" content="Plataforma de gestión turística, emprendimiento y hacer seguimiento a los datos generados a partir de la prestación del servicio de turismo en el Chocó. Transparencia, datos abiertos y desarrollo sostenible.">
    <link rel="canonical" href="https://choco.travel"> <!-- Reemplaza con tu dominio -->

    <!-- Open Graph (para Facebook, WhatsApp, etc.) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Chocó Travel - Un Borondo por el Chocó">
    <meta property="og:description" content="Plataforma de gestión turística, emprendimiento y hacer seguimiento a los datos generados a partir de la prestación del servicio de turismo en el Chocó. Transparencia, datos abiertos y desarrollo sostenible.">
    <meta property="og:image" content="https://cdn.kimkim.com/files/a/content_articles/featured_photos/83d820969529928c34b21a4880acc880ac65ec02/big-6931505283217fc4b4028a4e93937637.jpg"> <!-- Cambia por un logo tuyo -->
    <meta property="og:url" content="https://choco.travel/">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Chocó Travel - Un Borondo por el Chocó">
    <meta name="twitter:description" content="Plataforma de gestión turística, emprendimiento y hacer seguimiento a los datos generados a partir de la prestación del servicio de turismo en el Chocó. Transparencia, datos abiertos y desarrollo sostenible.">
    <meta name="twitter:image" content="https://cdn.kimkim.com/files/a/content_articles/featured_photos/83d820969529928c34b21a4880acc880ac65ec02/big-6931505283217fc4b4028a4e93937637.jpg">


    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset("assets/images/icono.png")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body{
            font-family: "Inter", sans-serif;
        }
        #map {
            z-index: 0 !important;
        }
    </style>
</head>
<body class="scroll-smooth">
@include("inc/top")
@include("inc/main-menu")
<section class="w-full md:pt-20">
    @yield('content')
</section>
@include("inc/footer")
<!-- En tu src/index.html justo antes del </body> -->
@yield('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


@include('inc.spinner')
<script>
    $('#spinner').hide();
    const showLoading = () => {
        $('#spinner').show(); // Mostrar el spinner apenas el DOM esté listo
    };
    const hiddeLoading = () => {
        $('#spinner').fadeOut('slow'); // Mostrar el spinner apenas el DOM esté listo
    };

    $(window).on('load', function () {
        $('#spinner').fadeOut('slow'); // Ocultar cuando todo haya cargado
    });
</script>

</body>
</html>
