<?php

declare(strict_types=1);

namespace App\Models;

final class Promotion
{
    private const IMG_BAILARINA = '/assets/imagenes/bailarinainicio.png';
    private const IMG_CASUAL = '/assets/imagenes/casualinicio.png';
    private const IMG_URBAN = '/assets/imagenes/urban.png';
    private const IMG_URBAN2 = '/assets/imagenes/urban2.png';

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
                self::IMG_BAILARINA,
            ),
            new self(
                'NUEVA TEMPORADA',
                'Libertad en',
                'cada paso.',
                'Telas premium para que solo pienses en bailar.',
                'Ver novedades',
                '#nueva-coleccion',
                self::IMG_CASUAL,
            ),
            new self(
                'MOVA STUDIO',
                'Brilla en el',
                'ensayo.',
                'Piezas versátiles para clase y escenario.',
                'Descubrir estilos',
                '#estilos',
                self::IMG_URBAN,
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
            self::IMG_URBAN2,
        );
    }
}
