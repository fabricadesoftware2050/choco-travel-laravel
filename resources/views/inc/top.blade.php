<!-- Top Header Azul -->
<div class="fixed top-0 left-0 w-full z-50 bg-blue-900 text-white flex items-center justify-between px-6 py-1 shadow h-[35px]">
    <div class="flex items-center gap-4">
        <img src="{{asset('assets/images/logogov.svg')}}" alt="Logo" class="h-5 w-auto" />
    </div>
    <div class="flex gap-4 items-center">
        <div id="google_translate_element" class="text-sm text-white"></div>
    </div>
</div>

<style>
    /* Estilo para el selector de Google Translate */
    #google_translate_element .goog-te-gadget {
        font-family: inherit;
        font-size: 0.85rem;
        color: white !important;
        margin-bottom: 5px;
    }

    #google_translate_element select {
        background-color: #1e40af; /* Azul más oscuro */
        color: white;
        border: none;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.95rem;
    }

    /* Oculta el ícono de Google que aparece debajo */
    .goog-logo-link,
    .goog-te-gadget span {
        display: none !important;
    }

    /* Asegura que no se agregue espacio extra */
    .goog-te-gadget {
        height: 100%;
    }
</style>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'es',
            includedLanguages: 'es,en,fr,de,pt,it',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
            autoDisplay: false
        }, 'google_translate_element');
    }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
