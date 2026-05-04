<?php
/** @var list<array{name:string,price:string,img:string,href:string}> $favorites */
?>
<section class="home-band section" id="favoritos" aria-labelledby="home-favorites-title">
    <div class="section-head">
        <h2 id="home-favorites-title" class="section-title">Nuevos favoritos</h2>
        <a class="section-link" href="#">Ver todos <span aria-hidden="true">→</span></a>
    </div>
    <div class="favorites-grid">
        <?php foreach ($favorites as $f): ?>
            <article class="fav-card">
                <a class="fav-card__link" href="<?= htmlspecialchars(mova_page_href($base, $f['href']), ENT_QUOTES, 'UTF-8') ?>">
                    <span class="fav-card__heart" aria-hidden="true">♡</span>
                    <div class="fav-card__media">
                        <img src="<?= htmlspecialchars($f['img'], ENT_QUOTES, 'UTF-8') ?>" alt="" loading="lazy" width="400" height="500">
                    </div>
                    <div class="fav-card__meta">
                        <h3 class="fav-card__name"><?= htmlspecialchars($f['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="fav-card__price"><?= htmlspecialchars($f['price'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
