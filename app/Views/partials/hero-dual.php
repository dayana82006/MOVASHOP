<?php
/** @var array $homeHero */
$h = $homeHero;
?>
<section class="hero-dual" aria-label="Presentación MOVA">
    <div class="hero-dual__grid">
        <div class="hero-dual__cell" style="background-image:url('<?= htmlspecialchars(mova_media_url($h['imgLeft']), ENT_QUOTES, 'UTF-8') ?>')"></div>
        <div class="hero-dual__cell" style="background-image:url('<?= htmlspecialchars($h['imgRight'], ENT_QUOTES, 'UTF-8') ?>')"></div>
    </div>
    <div class="hero-dual__overlay">
        <h1 class="hero-dual__title"><?= htmlspecialchars($h['title'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="hero-dual__subtitle"><?= htmlspecialchars($h['subtitle'], ENT_QUOTES, 'UTF-8') ?></p>
        <span class="hero-dual__rule" aria-hidden="true"></span>
        <div class="hero-dual__ctas">
            <a class="btn-hero btn-hero--solid" href="<?= htmlspecialchars(mova_page_href($base ?? '', $h['cta1']['href']), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($h['cta1']['label'], ENT_QUOTES, 'UTF-8') ?></a>
            <a class="btn-hero btn-hero--outline" href="<?= htmlspecialchars(mova_page_href($base ?? '', $h['cta2']['href']), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($h['cta2']['label'], ENT_QUOTES, 'UTF-8') ?></a>
        </div>
    </div>
</section>
