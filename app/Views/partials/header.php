<?php
$config = $config ?? require dirname(__DIR__, 2) . '/config/config.php';
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
?>
<header class="top-bar">
    <button type="button" class="icon-btn" aria-label="Menú">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <a class="logo" href="<?= htmlspecialchars(mova_page_href($base, '/'), ENT_QUOTES, 'UTF-8') ?>">MOVA</a>
    <div class="top-bar__actions">
        <button type="button" class="icon-btn" aria-label="Buscar">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        </button>
        <a class="icon-btn icon-btn--badge" href="#" aria-label="Carrito">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 7h15l-2 9H8L6 7z"/><path d="M6 7 5 3H2"/><circle cx="9" cy="20" r="1"/><circle cx="18" cy="20" r="1"/></svg>
            <span class="badge">0</span>
        </a>
    </div>
</header>
