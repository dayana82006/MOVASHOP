<?php

declare(strict_types=1);

namespace App\Models;

final class Category
{
    private const IMG_BAILARINA = '/assets/imagenes/bailarinainicio.png';
    private const IMG_CASUAL = '/assets/imagenes/casualinicio.png';
    private const IMG_URBAN = '/assets/imagenes/urban.png';
    private const IMG_URBAN2 = '/assets/imagenes/urban2.png';
    private const IMG_URBANO = '/assets/imagenes/urbano.png';

    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $slug,
        public readonly string $imageUrl,
    ) {
    }

    /** @return list<self> */
    public static function all(): array
    {
        return [
            new self(1, 'Urbano', 'urbano', self::IMG_URBANO),
            new self(2, 'Jazz', 'jazz', self::IMG_BAILARINA),
            new self(3, 'Contemporáneo', 'contemporaneo', self::IMG_CASUAL),
            new self(4, 'Clásico', 'clasico', self::IMG_URBAN),
            new self(5, 'Ballet Fit', 'ballet-fit', self::IMG_URBAN2),
            new self(6, 'Ensayos', 'ensayos', self::IMG_BAILARINA),
        ];
    }

    public static function findBySlug(string $slug): ?self
    {
        foreach (self::all() as $c) {
            if ($c->slug === $slug) {
                return $c;
            }
        }
        return null;
    }

    public static function findById(int $id): ?self
    {
        foreach (self::all() as $c) {
            if ($c->id === $id) {
                return $c;
            }
        }
        return null;
    }
}
