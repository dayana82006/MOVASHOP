<?php

declare(strict_types=1);

namespace App\Models;

final class Promotion
{
    public function __construct(
        public readonly string $eyebrow,
        public readonly string $title,
        public readonly string $titleAccent,
        public readonly string $subtitle,
        public readonly string $ctaLabel,
        public readonly string $ctaHref,
        public readonly string $imageUrl,
    ) {
    }

    /** @return list<self> */
    public static function heroSlides(): array
    {
        return [
            new self(
                'DISEÑADA PARA BAILAR.',
                'Ropa que se mueve',
                'contigo.',
                'Estilo, comodidad y libertad en cada movimiento.',
                'Explorar colecciones',
                '#colecciones',
                '/assets/imagenes/inicio.png',
            ),
            new self(
                'NUEVA TEMPORADA',
                'Libertad en',
                'cada paso.',
                'Telas premium para que solo pienses en bailar.',
                'Ver novedades',
                '#nueva-coleccion',
                'https://images.unsplash.com/photo-1508700929628-666bc8bd84ea?w=900&q=85',
            ),
            new self(
                'MOVA STUDIO',
                'Brilla en el',
                'ensayo.',
                'Piezas versátiles para clase y escenario.',
                'Descubrir estilos',
                '#estilos',
                'https://images.unsplash.com/photo-1547153760-18fc86324498?w=900&q=85',
            ),
        ];
    }

    public static function nuevaColeccionBanner(): self
    {
        return new self(
            'NUEVA COLECCIÓN',
            'Movimiento que',
            'inspira',
            'Descubre las nuevas piezas que combinan diseño, funcionalidad y tu pasión por el baile.',
            'Ver colección',
            '#',
            'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=900&q=85',
        );
    }
}
