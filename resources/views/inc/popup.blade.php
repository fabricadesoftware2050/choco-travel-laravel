<!-- Popup -->
<div id="sessionPopup" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6 text-center relative">
    <button id="closePopup" class="absolute top-2 right-2 text-gray-500 hover:text-black text-xl">&times;</button>
    <img src="{{asset("assets/images/logo2.png")}}" alt="Chocó Travel Logo" class="mx-auto w-full h-auto mb-4">
    <h3 class="text-xl font-bold mb-2">¡Bienvenidos a una ventana Tecnológica de nuestro Departamento!</h3>
    <p class="text-gray-700 text-sm">Descubre lo mejor del Chocó en un solo lugar.</p>
    <p class="text-gray-700 text-justify mt-4">Plataforma de gestión turística, emprendimiento y seguimiento a los datos generados a partir de la prestación del servicio de turismo en el Chocó.</p>
      <button id="closePopupButton" class="border px-8 py-1 mt-2 rounded bg-emerald-500">OK</button>
  </div>
</div>

<!-- Script para mostrar una vez -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
      const lastShown = localStorage.getItem("popupLastShown");
      const now = new Date();

      if (!lastShown || now - new Date(lastShown) > 24 * 60 * 60 * 1000) {
          document.getElementById("sessionPopup").classList.remove("hidden");
      }
    if (!localStorage.getItem("popupShown")) {
      document.getElementById("sessionPopup").classList.remove("hidden");
        // Lanzar confetti
       /* confetti({
            particleCount: 250,
            spread: 200,
            origin: { y: 0.6 }
        });*/
    }

    document.getElementById("closePopup").addEventListener("click", () => {
      document.getElementById("sessionPopup").classList.add("hidden");
        localStorage.setItem("popupLastShown", new Date().toISOString());
      localStorage.setItem("popupShown", "true");
        confetti({
            particleCount: 250,
            spread: 200,
            origin: { y: 0.6 }
        });
    });
    document.getElementById("closePopupButton").addEventListener("click", () => {
      document.getElementById("sessionPopup").classList.add("hidden");
        localStorage.setItem("popupLastShown", new Date().toISOString());
      localStorage.setItem("popupShown", "true");
        confetti({
            particleCount: 250,
            spread: 200,
            origin: { y: 0.6 }
        });
    });
  });
</script>
<!-- CDN de confetti -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
