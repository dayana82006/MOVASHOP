<section class="home-band section" aria-labelledby="home-moments-title">
    <h2 id="home-moments-title" class="home-band__title">Elige tu momento</h2>
    <div class="home-scroll">
        <div class="home-scroll__track home-scroll__track--moments">
            @foreach ($moments as $m)
                <a class="moment-card" href="{{ mova_page_href($movaBase, $m['href']) }}" style="--bg:url('{{ $m['img'] }}')">
                    <span class="moment-card__inner">
                        <span class="moment-card__name">{{ $m['title'] }}</span>
                        <span class="moment-card__text">{{ $m['text'] }}</span>
                        <span class="moment-card__go" aria-hidden="true">→</span>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>
