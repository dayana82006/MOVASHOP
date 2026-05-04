<?php
$config = $config ?? require dirname(__DIR__, 2) . '/config/config.php';
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
?>
<div class="urban-fixed-head">
    <p class="urban-ribbon">EDICIÓN LIMITADA · DROPS EXCLUSIVOS · URBANO MOVA YA DISPONIBLE</p>
    <header class="urban-nav" role="banner">
        <nav class="urban-nav__links" aria-label="Secciones">
            <a href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/">Inicio</a>
            <a href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/#estilos">Colección</a>
            <a href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/categoria/urbano" aria-current="page">Urbano</a>
            <a href="#urban-contacto">Contacto</a>
        </nav>
        <a class="urban-nav__logo" href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/">MOVA</a>
        <div class="urban-nav__tools">
            <button type="button" class="urban-icon-btn" aria-label="Buscar">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
            </button>
            <a class="urban-icon-btn" href="#" aria-label="Cuenta">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </a>
            <a class="urban-icon-btn" href="#" aria-label="Carrito">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 7h15l-2 9H8L6 7z"/><path d="M6 7 5 3H2"/><circle cx="9" cy="20" r="1"/><circle cx="18" cy="20" r="1"/></svg>
            </a>
        </div>
    </header>
</div>
