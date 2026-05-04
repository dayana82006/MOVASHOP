<?php
/** @var \App\Models\Category $category */
$config = $config ?? require dirname(__DIR__, 2) . '/config/config.php';
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
?>

<main class="main-scroll page-category">
    <section class="category-hero" style="--bg:url('<?= htmlspecialchars(mova_media_url($category->imageUrl), ENT_QUOTES, 'UTF-8') ?>')">
        <div class="category-hero__overlay"></div>
        <h1 class="category-hero__title"><?= htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8') ?></h1>
    </section>
    <section class="section category-placeholder">
        <p>Vista de categoría (<abbr title="Modelo Vista Controlador">MVC</abbr>): aquí cargarías productos desde el modelo <code>Product</code> filtrados por esta categoría.</p>
        <p><a class="section-link" href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/">← Volver al inicio</a></p>
    </section>
</main>
