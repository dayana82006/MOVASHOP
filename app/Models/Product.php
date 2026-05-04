<?php

declare(strict_types=1);

namespace App\Models;

/** Datos de ejemplo para vitrina en inicio (sustituir por BD). */
final class Product
{
    /**
     * @return array{chips: list<array{label:string,slug:string,active:bool}>, spotlight: list<array{title:string,subtitle:string,img:string,href:string,badge?:string}>, strip: list<array{title:string,price:string,img:string,href:string}>}
     */
    public static function homeShowcase(): array
    {
        $chips = [];
        foreach (Category::all() as $i => $cat) {
            $chips[] = [
                'label' => $cat->name,
                'slug' => $cat->slug,
                'active' => $i === 0,
            ];
        }

        return [
            'chips' => $chips,
            'spotlight' => [
                [
                    'title' => 'Conjunto ensayo',
                    'subtitle' => 'Capa + top',
                    'img' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?w=600&q=80',
                    'href' => '#',
                    'badge' => 'Nuevo',
                ],
                [
                    'title' => 'Línea street',
                    'subtitle' => 'Comprar ahora',
                    'img' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=600&q=80',
                    'href' => '/categoria/urbano',
                    'badge' => null,
                ],
            ],
            'strip' => [
                [
                    'title' => 'Top mesh degradado',
                    'price' => '$128.000 COP',
                    'img' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=500&q=80',
                    'href' => '#',
                ],
                [
                    'title' => 'Leggings largos Studio',
                    'price' => '$95.000 COP',
                    'img' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?w=500&q=80',
                    'href' => '#',
                ],
                [
                    'title' => 'Sudadera cropped MOVA',
                    'price' => '$142.000 COP',
                    'img' => 'https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=500&q=80',
                    'href' => '#',
                ],
                [
                    'title' => 'Chaqueta liviana Urbano',
                    'price' => '$156.000 COP',
                    'img' => 'https://images.unsplash.com/photo-1434389677669-e08b4cac3105?w=500&q=80',
                    'href' => '#',
                ],
            ],
        ];
    }
}
