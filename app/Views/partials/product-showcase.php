<?php
/** @var array|null $productShowcase */
$config = require dirname(__DIR__, 2) . '/config/config.php';
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
$sc = isset($productShowcase) && is_array($productShowcase)
    ? $productShowcase
    : ['chips' => [], 'spotlight' => [], 'strip' => []];
?>

<section class="product-showcase section" aria-labelledby="product-showcase-title">
    <div class="product-showcase__head">
        <h2 id="product-showcase-title" class="product-showcase__title">Descubre piezas</h2>
        <p class="product-showcase__hint">Desliza categorías y colecciones</p>
    </div>

    <div class="category-chips" role="navigation" aria-label="Estilos rápidos">
        <?php foreach ($sc['chips'] as $chip): ?>
            <a
                class="category-chip <?= !empty($chip['active']) ? 'is-active' : '' ?>"
                href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/categoria/<?= htmlspecialchars($chip['slug'], ENT_QUOTES, 'UTF-8') ?>"
                <?= !empty($chip['active']) ? 'aria-current="page"' : '' ?>
            ><?= htmlspecialchars($chip['label'], ENT_QUOTES, 'UTF-8') ?></a>
        <?php endforeach; ?>
    </div>

    <div class="product-spotlight">
        <?php foreach ($sc['spotlight'] as $item): ?>
            <article class="spotlight-card">
                <a class="spotlight-card__link" href="<?= htmlspecialchars(mova_page_href($base, (string) ($item['href'] ?? '#')), ENT_QUOTES, 'UTF-8') ?>">
                    <div class="spotlight-card__media">
                        <img src="<?= htmlspecialchars($item['img'], ENT_QUOTES, 'UTF-8') ?>" alt="" loading="lazy" width="600" height="720">
                        <?php if (!empty($item['badge'])): ?>
                            <span class="spotlight-card__badge"><?= htmlspecialchars($item['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endif; ?>
                        <span class="spotlight-card__fab" aria-hidden="true">+</span>
                    </div>
                    <div class="spotlight-card__meta">
                        <h3 class="spotlight-card__name"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <span class="spotlight-card__cta"><?= htmlspecialchars($item['subtitle'], ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>

    <h3 class="product-strip__heading">Te puede interesar</h3>
    <div class="product-strip" role="region" aria-label="Productos en carrusel">
        <?php foreach ($sc['strip'] as $row): ?>
            <article class="strip-card">
                <a class="strip-card__link" href="<?= htmlspecialchars(mova_page_href($base, (string) ($row['href'] ?? '#')), ENT_QUOTES, 'UTF-8') ?>">
                    <div class="strip-card__copy">
                        <h4 class="strip-card__title"><?= htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') ?></h4>
                        <p class="strip-card__price"><?= htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8') ?></p>
                        <span class="strip-card__btn">Comprar ahora</span>
                    </div>
                    <div class="strip-card__visual">
                        <img src="<?= htmlspecialchars($row['img'], ENT_QUOTES, 'UTF-8') ?>" alt="" loading="lazy" width="400" height="500">
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
