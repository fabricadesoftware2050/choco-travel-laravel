<style>

    /* --- Footer fijo --- */
    .main-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 99999;
        background-color: #1e3a8a;
        color: #fff;
        text-align: center;
        padding: 0.5rem 1rem; /* py‑2 */
        font-size: 0.875rem;  /* text-sm */
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.25rem;
    }

    /* --- Ajuste responsivo opcional --- */
    @media (min-width: 640px) {
        .main-footer {
            flex-direction: row;
            justify-content: center;
        }
    }

</style>
<!-- Footer -->
<!-- Footer -->
<footer class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        <div>
            <img src="{{asset("assets/images/icono.png")}}" alt="Logo" class="h-20 w-auto" />
            <h4 class="font-bold mb-2">Chocó Travel</h4>
            <p class="text-sm text-gray-600">Plataforma integral para la promoción turística, experiencias auténticas y desarrollo sostenible del Chocó.</p>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Destinos</h4>
            <ul class="text-sm text-gray-700 space-y-1">
                <li><a href="#" class="hover:underline">Bahía Solano</a></li>
                <li><a href="#" class="hover:underline">Nuquí</a></li>
                <li><a href="#" class="hover:underline">Capurganá</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Experiencias</h4>
            <ul class="text-sm text-gray-700 space-y-1">
                <li><a href="#" class="hover:underline">Tour Quibdó</a></li>
                <li><a href="#" class="hover:underline">Avistamiento de ballenas</a></li>
                <li><a href="#" class="hover:underline">Tour Tutunendo</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Comunidad</h4>
            <ul class="text-sm text-gray-700 space-y-1">
                <li><a href="#" class="hover:underline">Recomendaciones</a></li>
                <li><a href="#" class="hover:underline">Guías locales</a></li>
                <li><a href="#" class="hover:underline">Ayuda</a></li>
            </ul>
        </div>
    </div>
<div class="main-footer">
    © 2025 Plataforma Turística del Chocó | choco.travel | Gobernación del Chocó.
</div>
</footer>




