<?php
/** @var string $content */
$config = $config ?? require dirname(__DIR__, 2) . '/config/config.php';
$title = $title ?? ($config['app_name'] ?? 'MOVA');
$base = rtrim((string) ($config['base_url'] ?? ''), '/');
?>
<!DOCTYPE html>
<html lang="es" class="<?= isset($bodyClass) && $bodyClass !== '' ? htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') : '' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cossette+Texte:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= htmlspecialchars(mova_asset_href('assets/css/style.css'), ENT_QUOTES, 'UTF-8') ?>">
</head>
<body class="mova-app<?= isset($bodyClass) && $bodyClass !== '' ? ' ' . htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') : '' ?>">
<?php require __DIR__ . '/partials/header.php'; ?>
<?= $content ?>
<?php require __DIR__ . '/partials/bottom-nav.php'; ?>
<script src="<?= htmlspecialchars(mova_asset_href('assets/js/app.js'), ENT_QUOTES, 'UTF-8') ?>" defer></script>
</body>
</html>
