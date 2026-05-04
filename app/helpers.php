<?php

declare(strict_types=1);

/**
 * URL final para imágenes/CSS: rutas locales (/assets/...) respetan base_url del config.
 */
function mova_media_url(string $url): string
{
    if (preg_match('#^https?://#i', $url)) {
        return $url;
    }
    $config = require dirname(__DIR__) . '/config/config.php';
    $base = rtrim((string) ($config['base_url'] ?? ''), '/');
    $path = '/' . ltrim($url, '/');

    return $base . $path;
}

/**
 * Enlace interno: no anteponer base_url a anclas (#) ni a rutas ya absolutas http(s).
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

    return $base . $href;
}
