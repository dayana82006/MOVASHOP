<section class="home-band section" id="colecciones" aria-labelledby="home-collections-title">
    <div class="section-head">
        <h2 id="home-collections-title" class="section-title">Descubre nuestras colecciones</h2>
        <a class="section-link" href="#">Ver todas <span aria-hidden="true">→</span></a>
    </div>
    <div class="home-scroll">
        <div class="home-scroll__track home-scroll__track--collections">
            @foreach ($collections as $c)
                <a class="collection-card" href="{{ mova_page_href($movaBase, $c['href']) }}" style="--bg:url('{{ $c['img'] }}')">
                    <span class="collection-card__inner">
                        <span class="collection-card__name">{{ $c['name'] }}</span>
                        <span class="collection-card__text">{{ $c['text'] }}</span>
                        <span class="collection-card__go" aria-hidden="true">→</span>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>
