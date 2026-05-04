<section class="home-band section" id="favoritos" aria-labelledby="home-favorites-title">
    <div class="section-head">
        <h2 id="home-favorites-title" class="section-title">Nuevos favoritos</h2>
        <a class="section-link" href="#">Ver todos <span aria-hidden="true">→</span></a>
    </div>
    <div class="favorites-grid">
        @foreach ($favorites as $f)
            <article class="fav-card">
                <a class="fav-card__link" href="{{ mova_page_href($movaBase, $f['href']) }}">
                    <span class="fav-card__heart" aria-hidden="true">♡</span>
                    <div class="fav-card__media">
                        <img src="{{ $f['img'] }}" alt="" loading="lazy" width="400" height="500">
                    </div>
                    <div class="fav-card__meta">
                        <h3 class="fav-card__name">{{ $f['name'] }}</h3>
                        <p class="fav-card__price">{{ $f['price'] }}</p>
                    </div>
                </a>
            </article>
        @endforeach
    </div>
</section>
