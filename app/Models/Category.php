<?php

declare(strict_types=1);

namespace App\Models;

final class Category
{
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
            new self(1, 'Urbano', 'urbano', '/assets/imagenes/urbano.png'),
            new self(2, 'Jazz', 'jazz', 'https://images.unsplash.com/photo-1508700929628-666bc8bd84ea?w=600&q=80'),
            new self(3, 'Contemporáneo', 'contemporaneo', 'https://images.unsplash.com/photo-1547153760-18fc86324498?w=600&q=80'),
            new self(4, 'Clásico', 'clasico', 'https://images.unsplash.com/photo-1518834345639-29cb29eeaa1b?w=600&q=80'),
            new self(5, 'Ballet Fit', 'ballet-fit', 'https://images.unsplash.com/photo-1518611012118-696072aa579a?w=600&q=80'),
            new self(6, 'Ensayos', 'ensayos', 'https://images.unsplash.com/photo-1508807526345-15e9b5f4eaff?w=600&q=80'),
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
