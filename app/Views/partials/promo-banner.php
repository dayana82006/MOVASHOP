<section class="promo-banner" id="nueva-coleccion">
    <div class="promo-banner__inner">
        <div class="promo-banner__copy">
            <p class="promo-banner__eyebrow"><?= htmlspecialchars($nuevaColeccion->eyebrow, ENT_QUOTES, 'UTF-8') ?></p>
            <h2 class="promo-banner__title">
                <?= htmlspecialchars($nuevaColeccion->title, ENT_QUOTES, 'UTF-8') ?>
                <span class="promo-banner__accent"><?= htmlspecialchars($nuevaColeccion->titleAccent, ENT_QUOTES, 'UTF-8') ?></span>
            </h2>
            <p class="promo-banner__text"><?= htmlspecialchars($nuevaColeccion->subtitle, ENT_QUOTES, 'UTF-8') ?></p>
            <a class="btn btn--ghost" href="<?= htmlspecialchars($nuevaColeccion->ctaHref, ENT_QUOTES, 'UTF-8') ?>">
                <?= htmlspecialchars($nuevaColeccion->ctaLabel, ENT_QUOTES, 'UTF-8') ?>
                <span class="btn__arrow" aria-hidden="true">→</span>
            </a>
        </div>
        <div class="promo-banner__media" style="background-image:url('<?= htmlspecialchars($nuevaColeccion->imageUrl, ENT_QUOTES, 'UTF-8') ?>')"></div>
    </div>
</section>
