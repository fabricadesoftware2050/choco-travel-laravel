<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="minimal" data-theme-colors="default" data-bs-theme="light" data-layout-width="fluid" data-layout-position="scrollable" data-layout-style="default" data-body-image="none" data-sidebar-visibility="show">
<head>
    <meta charset="utf-8">
    <title>CHOCÓ TRAVEL - @yield('title','Gobernación del Chocó')</title>
    <!-- SEO Básico -->
    <meta name="description" content="Plataforma para registrar ideas, solicitar avales y hacer seguimiento a proyectos de cooperación en el Chocó. Transparencia, datos abiertos y desarrollo sostenible.">
    <link rel="canonical" href="https://choco.travel"> <!-- Reemplaza con tu dominio -->

    <!-- Open Graph (para Facebook, WhatsApp, etc.) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Chocó Open Data - Plataforma COD">
    <meta property="og:description" content="Transforma ideas en impacto real para el Chocó con una plataforma que conecta organizaciones con oportunidades de cooperación.">
    <meta property="og:image" content="https://cdn.kimkim.com/files/a/content_articles/featured_photos/83d820969529928c34b21a4880acc880ac65ec02/big-6931505283217fc4b4028a4e93937637.jpg"> <!-- Cambia por un logo tuyo -->
    <meta property="og:url" content="https://choco.travel/">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Chocó Open Data - Plataforma COD">
    <meta name="twitter:description" content="Accede a oportunidades de cooperación para transformar el Chocó con proyectos transparentes y trazables.">
    <meta name="twitter:image" content="https://cdn.kimkim.com/files/a/content_articles/featured_photos/83d820969529928c34b21a4880acc880ac65ec02/big-6931505283217fc4b4028a4e93937637.jpg">


    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset("assets/images/logo.png")}}">
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
<body>
@include("inc/top")
@include("inc/main-menu")
<section class="w-full md:pt-20">
    @yield('content')
</section>
@include("inc/footer")
<!-- En tu src/index.html justo antes del </body> -->
@yield('js')
<script type="text/javascript">
    function googleTranslateElementInit() {

        new google.translate.TranslateElement(
            {
                pageLanguage: 'es',
                includedLanguages: 'es,en,fr,de,pt,it',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
                autoDisplay: false
            },
            'google_translate_element'
        );
    }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
