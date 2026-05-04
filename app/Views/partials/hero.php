<section class="hero" aria-roledescription="carrusel">
    <div class="hero__viewport">
        <?php foreach ($heroSlides as $i => $slide): ?>
            <article class="hero-slide <?= $i === 0 ? 'is-active' : '' ?>" data-slide="<?= (int) $i ?>" aria-hidden="<?= $i === 0 ? 'false' : 'true' ?>">
                <div class="hero-slide__bg" style="background-image:url('<?= htmlspecialchars(mova_media_url($slide->imageUrl), ENT_QUOTES, 'UTF-8') ?>')"></div>
                <div class="hero-slide__content">
                    <p class="hero-slide__eyebrow"><?= htmlspecialchars($slide->eyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                    <h1 class="hero-slide__title">
                        <?= htmlspecialchars($slide->title, ENT_QUOTES, 'UTF-8') ?>
                        <span class="hero-slide__accent"><?= htmlspecialchars($slide->titleAccent, ENT_QUOTES, 'UTF-8') ?></span>
                    </h1>
                    <p class="hero-slide__subtitle"><?= htmlspecialchars($slide->subtitle, ENT_QUOTES, 'UTF-8') ?></p>
                    <a class="btn btn--primary" href="<?= htmlspecialchars($slide->ctaHref, ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($slide->ctaLabel, ENT_QUOTES, 'UTF-8') ?>
                        <span class="btn__arrow" aria-hidden="true">→</span>
                    </a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
    <div class="hero__dots" role="tablist" aria-label="Diapositivas">
        <?php foreach ($heroSlides as $i => $_): ?>
            <button type="button" class="hero__dot <?= $i === 0 ? 'is-active' : '' ?>" data-go="<?= (int) $i ?>" aria-label="Slide <?= (int) ($i + 1) ?>" role="tab" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"></button>
        <?php endforeach; ?>
    </div>
</section>
