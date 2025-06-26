<div id="spinner" class="loading-overlay">
    <div class="loading-box">
        <div class="spinner"></div>
        <div class="loading-text">Cargando...</div>
    </div>
</div>
<style>

    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(45, 43, 43, 0.67); /* fondo general translúcido */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loading-box {
        background-color: white;
        padding: 20px 30px;
        border-radius: 200px;
        box-shadow: 0 0 10px rgba(5, 128, 42, 0.1);
        text-align: center;
    }

    .spinner {
        border: 6px solid #f3f3f3;
        border-top: 6px solid #6ee73e;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: spin 1s linear infinite;
        margin: 0 auto 15px auto;
    }

    .loading-text {
        font-size: 1.1rem;
        color: #333;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

</style>
