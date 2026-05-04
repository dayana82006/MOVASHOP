<section class="benefits-bar" aria-label="Beneficios MOVA">
    <div class="benefits-bar__inner">
        @foreach ($trustItems as $item)
            <div class="benefits-bar__item">
                <span class="benefits-bar__icon" aria-hidden="true">@include('icons.' . $item['icon'])</span>
                <h3 class="benefits-bar__title">{{ $item['title'] }}</h3>
                <p class="benefits-bar__text">{{ $item['text'] }}</p>
            </div>
        @endforeach
    </div>
</section>
