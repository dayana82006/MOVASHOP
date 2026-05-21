<?php

declare(strict_types=1);

namespace App\Models;

/** Datos de ejemplo para vitrina en inicio (sustituir por BD). */
final class Product
{
    private const IMG_BAILARINA = '/assets/imagenes/bailarinainicio.png';
    private const IMG_CASUAL = '/assets/imagenes/casualinicio.png';
    private const IMG_URBAN = '/assets/imagenes/urban.png';
    private const IMG_URBAN2 = '/assets/imagenes/urban2.png';
    private const IMG_URBANO = '/assets/imagenes/urbano.png';

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
                    'img' => self::IMG_BAILARINA,
                    'href' => '#',
                    'badge' => 'Nuevo',
                ],
                [
                    'title' => 'Línea street',
                    'subtitle' => 'Comprar ahora',
                    'img' => self::IMG_URBAN,
                    'href' => '/categoria/urbano',
                    'badge' => null,
                ],
            ],
            'strip' => [
                [
                    'title' => 'Top mesh degradado',
                    'price' => '$128.000 COP',
                    'img' => self::IMG_BAILARINA,
                    'href' => '#',
                ],
                [
                    'title' => 'Leggings largos Studio',
                    'price' => '$95.000 COP',
                    'img' => self::IMG_CASUAL,
                    'href' => '#',
                ],
                [
                    'title' => 'Sudadera cropped MOVA',
                    'price' => '$142.000 COP',
                    'img' => self::IMG_URBAN2,
                    'href' => '#',
                ],
                [
                    'title' => 'Chaqueta liviana Urbano',
                    'price' => '$156.000 COP',
                    'img' => self::IMG_URBANO,
                    'href' => '#',
                ],
            ],
        ];
    }
}
