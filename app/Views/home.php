<?php
$config = require dirname(__DIR__, 2) . '/config/config.php';
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
?>

<main class="main-scroll">
    <?php require __DIR__ . '/partials/hero.php'; ?>

    <section class="section value-grid" aria-label="Ventajas">
        <?php foreach ($valueProps as $item): ?>
            <div class="value-card">
                <span class="value-card__icon" aria-hidden="true"><?php require __DIR__ . '/icons/' . $item['icon'] . '.svg.php'; ?></span>
                <h3 class="value-card__title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p class="value-card__text"><?= htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <?php require __DIR__ . '/partials/product-showcase.php'; ?>

    <section class="section categories" id="estilos">
        <div class="section-head">
            <h2 class="section-title">Compra por estilo de baile</h2>
            <a class="section-link" href="#">Ver todas <span aria-hidden="true">→</span></a>
        </div>
        <div class="category-grid">
            <?php foreach ($categories as $cat): ?>
                <a class="category-card" href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/categoria/<?= htmlspecialchars($cat->slug, ENT_QUOTES, 'UTF-8') ?>" style="--bg:url('<?= htmlspecialchars(mova_media_url($cat->imageUrl), ENT_QUOTES, 'UTF-8') ?>')">
                    <span class="category-card__label"><?= htmlspecialchars($cat->name, ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="category-card__btn" aria-hidden="true">→</span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <?php require __DIR__ . '/partials/promo-banner.php'; ?>

    <section class="section trust-grid" aria-label="Confianza y servicios">
        <?php foreach ($trustItems as $item): ?>
            <div class="trust-card">
                <span class="trust-card__icon" aria-hidden="true"><?php require __DIR__ . '/icons/' . $item['icon'] . '.svg.php'; ?></span>
                <h3 class="trust-card__title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p class="trust-card__text"><?= htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        <?php endforeach; ?>
    </section>
</main>
