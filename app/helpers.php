<?php

declare(strict_types=1);

/**
 * Prefijo de la app en el servidor (p. ej. "" o "/MOVA/public") para armar URLs de /assets y rutas internas.
 */
function mova_public_prefix(): string
{
    $config = require dirname(__DIR__) . '/config/config.php';
    $base = rtrim((string) ($config['base_url'] ?? ''), '/');
    if ($base !== '') {
        return $base;
    }
    $script = isset($_SERVER['SCRIPT_NAME']) ? (string) $_SERVER['SCRIPT_NAME'] : '';
    $script = str_replace('\\', '/', $script);
    if ($script === '' || $script === '/') {
        return '';
    }
    $dir = dirname($script);
    $dir = rtrim(str_replace('\\', '/', $dir), '/');
    if ($dir === '' || $dir === '.' || $dir === '/') {
        return '';
    }

    return $dir;
}

/**
 * URL a un archivo bajo /public (CSS, JS, imágenes). Funciona en subcarpeta sin base_url en config.
 */
function mova_asset_href(string $path): string
{
    $path = '/' . ltrim($path, '/');

    return mova_public_prefix() . $path;
}

/**
 * URL final para imágenes/CSS: rutas locales respetan base_url o prefijo automático.
 */
function mova_media_url(string $url): string
{
    if (preg_match('#^https?://#i', $url)) {
        return $url;
    }
    $path = '/' . ltrim($url, '/');

    return mova_public_prefix() . $path;
}

/**
 * Enlace interno: no anteponer prefijo a anclas (#) ni a rutas ya absolutas http(s).
 * Si base_url está vacío, usa el mismo prefijo que los assets (subcarpeta).
 */
function mova_page_href(string $base, string $href): string
{
    $href = trim($href);
    if ($href === '' || $href === '#') {
        return '#';
    }
    if ($href[0] === '#') {
        return $href;
    }
    if (preg_match('#^https?://#i', $href)) {
        return $href;
    }

    $root = rtrim($base, '/');
    if ($root === '') {
        $root = mova_public_prefix();
    }
    $path = $href[0] === '/' ? $href : '/' . $href;

    return $root . $path;
}
