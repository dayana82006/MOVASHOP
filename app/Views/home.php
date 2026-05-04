<?php
$config = require dirname(__DIR__, 2) . '/config/config.php';
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
?>

<main class="main-scroll main-scroll--home">
    <?php require __DIR__ . '/partials/hero-dual.php'; ?>
    <?php require __DIR__ . '/partials/home-moments.php'; ?>
    <?php require __DIR__ . '/partials/home-collections.php'; ?>
    <?php require __DIR__ . '/partials/home-favorites.php'; ?>
    <?php require __DIR__ . '/partials/home-benefits.php'; ?>
</main>
