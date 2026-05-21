@extends('layouts.mova-urbano')

@section('content')
@php
    $intro = $heroSlides[0];
    $editorialBlocks = array_slice($heroSlides, 1);
@endphp
<main class="urban-wire">
    <p class="urban-wire__intro">{{ $intro->subtitle }}</p>
    <p class="urban-wire__navtop">
        <a class="urban-wire__a" href="{{ mova_page_href($movaBase, $intro->ctaHref) }}">{{ $intro->ctaLabel }} →</a>
    </p>

    @foreach ($editorialBlocks as $slide)
        <section class="urban-wire__block">
            <p class="urban-wire__label">{{ $slide->eyebrow }}</p>
            <h2 class="urban-wire__heading">
                {{ $slide->title }}
                {{ ' ' . $slide->titleAccent }}
            </h2>
            <p class="urban-wire__body">{{ $slide->subtitle }}</p>
            <p class="urban-wire__cta">
                <a class="urban-wire__a" href="{{ mova_page_href($movaBase, $slide->ctaHref) }}">{{ $slide->ctaLabel }} →</a>
            </p>
        </section>
    @endforeach

    <div class="urban-wire__dots" aria-hidden="true">
        @foreach ($heroSlides as $i => $_)
            <span class="urban-wire__dot {{ $i === 0 ? 'is-on' : '' }}"></span>
        @endforeach
    </div>

    @foreach ($valueProps as $item)
        <div class="urban-wire__feature">
            <div class="urban-wire__icon">@include('icons.' . $item['icon'])</div>
            <h3 class="urban-wire__feat-title">{{ $item['title'] }}</h3>
            <p class="urban-wire__feat-text">{{ $item['text'] }}</p>
        </div>
    @endforeach

    <section class="urban-wire__products" id="urban-productos">
        <h2 class="urban-wire__heading urban-wire__heading--section">Urbano — productos</h2>
        <ul class="urban-wire__plist">
            @foreach ($products as $p)
                <li class="urban-wire__prow">
                    <a class="urban-wire__prow-link" href="#">
                        <span class="urban-wire__pimg"><img src="{{ mova_media_url($p['img']) }}" alt="" loading="lazy" width="80" height="100"></span>
                        <span class="urban-wire__pinfo">
                            <span class="urban-wire__pname">{{ $p['name'] }}</span>
                            <span class="urban-wire__pold">{{ $p['old'] }}</span>
                            <span class="urban-wire__pprice">{{ $p['price'] }}</span>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <p class="urban-wire__back">
        <a class="urban-wire__a" href="{{ mova_page_href($movaBase, '/') }}">← Volver al inicio</a>
    </p>
    <span id="urban-contacto" class="urban-wire__anchor"></span>
</main>
@endsection
