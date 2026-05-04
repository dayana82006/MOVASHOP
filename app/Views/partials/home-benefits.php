<?php
/** @var list<array{icon:string,title:string,text:string}> $trustItems */
?>
<section class="benefits-bar" aria-label="Beneficios MOVA">
    <div class="benefits-bar__inner">
        <?php foreach ($trustItems as $item): ?>
            <div class="benefits-bar__item">
                <span class="benefits-bar__icon" aria-hidden="true"><?php require __DIR__ . '/icons/' . $item['icon'] . '.svg.php'; ?></span>
                <h3 class="benefits-bar__title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p class="benefits-bar__text"><?= htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
