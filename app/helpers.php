<?php

declare(strict_types=1);

/**
 * Prefijo de URL manual (subcarpeta) cuando MOVA_BASE_URL está definido.
 */
function mova_public_prefix(): string
{
    return rtrim((string) config('mova.base_url', ''), '/');
}

function mova_asset_href(string $path): string
{
    return asset(ltrim($path, '/'));
}

function mova_media_url(string $url): string
{
    if (preg_match('#^https?://#i', $url)) {
        return $url;
    }

    return asset(ltrim($url, '/'));
}

/**
 * Enlaces internos; con base vacía usa la URL de la aplicación (APP_URL).
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
        return url($href[0] === '/' ? $href : '/' . $href);
    }
    $path = $href[0] === '/' ? $href : '/' . $href;

    return $root . $path;
}
