<?php
/** @var list<array{title:string,text:string,img:string,href:string}> $moments */
?>
<section class="home-band section" aria-labelledby="home-moments-title">
    <h2 id="home-moments-title" class="home-band__title">Elige tu momento</h2>
    <div class="home-scroll">
        <div class="home-scroll__track home-scroll__track--moments">
            <?php foreach ($moments as $m): ?>
                <a class="moment-card" href="<?= htmlspecialchars(mova_page_href($base, $m['href']), ENT_QUOTES, 'UTF-8') ?>" style="--bg:url('<?= htmlspecialchars($m['img'], ENT_QUOTES, 'UTF-8') ?>')">
                    <span class="moment-card__inner">
                        <span class="moment-card__name"><?= htmlspecialchars($m['title'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="moment-card__text"><?= htmlspecialchars($m['text'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="moment-card__go" aria-hidden="true">→</span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
