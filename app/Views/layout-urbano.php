<?php
/** @var string $content */
$config = $config ?? require dirname(__DIR__, 2) . '/config/config.php';
$title = $title ?? ($config['app_name'] ?? 'MOVA');
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cossette+Texte:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/assets/css/category-urbano.css">
</head>
<body class="mova-app page-urbano-wire">
<?php require __DIR__ . '/partials/urban-top.php'; ?>
<?= $content ?>
<?php require __DIR__ . '/partials/bottom-nav.php'; ?>
<script src="<?= htmlspecialchars($base, ENT_QUOTES, 'UTF-8') ?>/assets/js/app.js" defer></script>
</body>
</html>
