<?php
/** @var list<array{name:string,text:string,img:string,href:string}> $collections */
?>
<section class="home-band section" id="colecciones" aria-labelledby="home-collections-title">
    <div class="section-head">
        <h2 id="home-collections-title" class="section-title">Descubre nuestras colecciones</h2>
        <a class="section-link" href="#">Ver todas <span aria-hidden="true">→</span></a>
    </div>
    <div class="home-scroll">
        <div class="home-scroll__track home-scroll__track--collections">
            <?php foreach ($collections as $c): ?>
                <a class="collection-card" href="<?= htmlspecialchars(mova_page_href($base, $c['href']), ENT_QUOTES, 'UTF-8') ?>" style="--bg:url('<?= htmlspecialchars($c['img'], ENT_QUOTES, 'UTF-8') ?>')">
                    <span class="collection-card__inner">
                        <span class="collection-card__name"><?= htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="collection-card__text"><?= htmlspecialchars($c['text'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="collection-card__go" aria-hidden="true">→</span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
