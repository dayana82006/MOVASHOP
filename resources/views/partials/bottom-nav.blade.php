@php
    $path = request()->path();
    $pathNorm = $path === '' ? '/' : '/' . $path;
    $isHome = $pathNorm === '/' || $path === '';
@endphp
<nav class="bottom-nav" aria-label="Navegación principal">
    <a class="bottom-nav__item {{ $isHome ? 'is-active' : '' }}" href="{{ mova_page_href($movaBase, '/') }}">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        <span>Inicio</span>
    </a>
    <a class="bottom-nav__item" href="#colecciones">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        <span>Categorías</span>
    </a>
    <a class="bottom-nav__item" href="#favoritos">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        <span>Favoritos</span>
    </a>
    <a class="bottom-nav__item" href="#">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        <span>Mi cuenta</span>
    </a>
    <a class="bottom-nav__item bottom-nav__item--badge" href="#">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 7h15l-2 9H8L6 7z"/><path d="M6 7 5 3H2"/><circle cx="9" cy="20" r="1"/><circle cx="18" cy="20" r="1"/></svg>
        <span class="badge">0</span>
        <span>Carrito</span>
    </a>
</nav>
