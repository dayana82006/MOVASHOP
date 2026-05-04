<?php
/** @var \App\Models\Category $category */
/** @var list<\App\Models\Promotion> $heroSlides */
/** @var list<array{icon:string,title:string,text:string}> $valueProps */
/** @var list<array{name:string,old:string,price:string,img:string}> $products */
$config = require dirname(__DIR__, 2) . '/config/config.php';
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
$intro = $heroSlides[0];
$editorialBlocks = array_slice($heroSlides, 1);
?>

<main class="urban-wire">
    <p class="urban-wire__intro"><?= htmlspecialchars($intro->subtitle, ENT_QUOTES, 'UTF-8') ?></p>
    <p class="urban-wire__navtop">
        <a class="urban-wire__a" href="<?= htmlspecialchars(mova_page_href($base, $intro->ctaHref), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($intro->ctaLabel, ENT_QUOTES, 'UTF-8') ?> →</a>
    </p>

    <?php foreach ($editorialBlocks as $slide): ?>
        <section class="urban-wire__block">
            <p class="urban-wire__label"><?= htmlspecialchars($slide->eyebrow, ENT_QUOTES, 'UTF-8') ?></p>
            <h2 class="urban-wire__heading">
                <?= htmlspecialchars($slide->title, ENT_QUOTES, 'UTF-8') ?>
                <?= htmlspecialchars(' ' . $slide->titleAccent, ENT_QUOTES, 'UTF-8') ?>
            </h2>
            <p class="urban-wire__body"><?= htmlspecialchars($slide->subtitle, ENT_QUOTES, 'UTF-8') ?></p>
            <p class="urban-wire__cta">
                <a class="urban-wire__a" href="<?= htmlspecialchars(mova_page_href($base, $slide->ctaHref), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($slide->ctaLabel, ENT_QUOTES, 'UTF-8') ?> →</a>
            </p>
        </section>
    <?php endforeach; ?>

    <div class="urban-wire__dots" aria-hidden="true">
        <?php foreach ($heroSlides as $i => $_): ?>
            <span class="urban-wire__dot <?= $i === 0 ? 'is-on' : '' ?>"></span>
        <?php endforeach; ?>
    </div>

    <?php foreach ($valueProps as $item): ?>
        <div class="urban-wire__feature">
            <div class="urban-wire__icon"><?php require __DIR__ . '/icons/' . $item['icon'] . '.svg.php'; ?></div>
            <h3 class="urban-wire__feat-title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p class="urban-wire__feat-text"><?= htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    <?php endforeach; ?>

    <section class="urban-wire__products" id="urban-productos">
        <h2 class="urban-wire__heading urban-wire__heading--section">Urbano — productos</h2>
        <ul class="urban-wire__plist">
            <?php foreach ($products as $p): ?>
                <li class="urban-wire__prow">
                    <a class="urban-wire__prow-link" href="#">
                        <span class="urban-wire__pimg"><img src="<?= htmlspecialchars($p['img'], ENT_QUOTES, 'UTF-8') ?>" alt="" loading="lazy" width="80" height="100"></span>
                        <span class="urban-wire__pinfo">
                            <span class="urban-wire__pname"><?= htmlspecialchars($p['name'], ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="urban-wire__pold"><?= htmlspecialchars($p['old'], ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="urban-wire__pprice"><?= htmlspecialchars($p['price'], ENT_QUOTES, 'UTF-8') ?></span>
                        </span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <p class="urban-wire__back">
        <a class="urban-wire__a" href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/">← Volver al inicio</a>
    </p>
    <span id="urban-contacto" class="urban-wire__anchor"></span>
</main>
