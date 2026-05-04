<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cossette+Texte:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mova_asset_href('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ mova_asset_href('assets/css/category-urbano.css') }}">
</head>
<body class="mova-app page-urbano-wire">
@include('partials.urban-top')
@yield('content')
@include('partials.bottom-nav')
<script src="{{ mova_asset_href('assets/js/app.js') }}" defer></script>
</body>
</html>
