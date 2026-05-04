@php
    $h = $homeHero;
@endphp
<section class="hero-dual" aria-label="Presentación MOVA">
    <div class="hero-dual__grid">
        <div class="hero-dual__cell" style="background-image:url('{{ mova_media_url($h['imgLeft']) }}')"></div>
        <div class="hero-dual__cell" style="background-image:url('{{ $h['imgRight'] }}')"></div>
    </div>
    <div class="hero-dual__overlay">
        <h1 class="hero-dual__title">{{ $h['title'] }}</h1>
        <p class="hero-dual__subtitle">{{ $h['subtitle'] }}</p>
        <span class="hero-dual__rule" aria-hidden="true"></span>
        <div class="hero-dual__ctas">
            <a class="btn-hero btn-hero--solid" href="{{ mova_page_href($movaBase, $h['cta1']['href']) }}">{{ $h['cta1']['label'] }}</a>
            <a class="btn-hero btn-hero--outline" href="{{ mova_page_href($movaBase, $h['cta2']['href']) }}">{{ $h['cta2']['label'] }}</a>
        </div>
    </div>
</section>
