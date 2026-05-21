<?php

declare(strict_types=1);

namespace App\Models;

/** Contenido estático de la landing de inicio (sustituir por BD). */
final class HomeContent
{
    private const IMG_BAILARINA = '/assets/imagenes/bailarinainicio.png';
    private const IMG_CASUAL = '/assets/imagenes/casualinicio.png';
    private const IMG_URBAN = '/assets/imagenes/urban.png';
    private const IMG_URBAN2 = '/assets/imagenes/urban2.png';
    private const IMG_URBANO = '/assets/imagenes/urbano.png';

    /** @return array{imgLeft:string,imgRight:string,title:string,subtitle:string,cta1:array{label:string,href:string},cta2:array{label:string,href:string}} */
    public static function heroDual(): array
    {
        return [
            'imgLeft' => self::IMG_BAILARINA,
            'imgRight' => self::IMG_CASUAL,
            'title' => 'Diseñada para moverte, donde sea.',
            'subtitle' => 'DE TU RUTINA A TU DÍA.',
            'cta1' => ['label' => 'Explorar colección', 'href' => '#colecciones'],
            'cta2' => ['label' => 'Conoce MOVA', 'href' => '#'],
        ];
    }

    /** @return list<array{title:string,text:string,img:string,href:string}> */
    public static function moments(): array
    {
        return [
            ['title' => 'Día a día', 'text' => 'Esenciales para vivir con estilo.', 'img' => self::IMG_CASUAL, 'href' => '#'],
            ['title' => 'Trabajo', 'text' => 'Minimalismo que te acompaña.', 'img' => self::IMG_CASUAL, 'href' => '#'],
            ['title' => 'Movimiento', 'text' => 'Diseñada para entrenar, crear y expresarte.', 'img' => self::IMG_BAILARINA, 'href' => '#'],
            ['title' => 'Street', 'text' => 'Actitud, comodidad y libertad.', 'img' => self::IMG_URBAN, 'href' => '/categoria/urbano'],
        ];
    }

    /** @return list<array{name:string,text:string,img:string,href:string}> */
    public static function collections(): array
    {
        return [
            ['name' => 'Essentials', 'text' => 'Piezas atemporales para cualquier ocasión.', 'img' => self::IMG_URBANO, 'href' => '#'],
            ['name' => 'Elevated Basics', 'text' => 'Lo esencial, pero elevado.', 'img' => self::IMG_CASUAL, 'href' => '#'],
            ['name' => 'Dance Edit', 'text' => 'Funcionalidad y belleza en cada movimiento.', 'img' => self::IMG_BAILARINA, 'href' => '#'],
            ['name' => 'Minimal Edit', 'text' => 'Menos es más. Siempre.', 'img' => self::IMG_URBAN2, 'href' => '#'],
        ];
    }

    /** @return list<array{name:string,price:string,img:string,href:string}> */
    public static function favorites(): array
    {
        return [
            ['name' => 'Cropped Tee', 'price' => '$89.900 COP', 'img' => self::IMG_URBAN, 'href' => '#'],
            ['name' => 'Pantalón Flow', 'price' => '$129.900 COP', 'img' => self::IMG_URBAN2, 'href' => '#'],
            ['name' => 'Chaqueta Mova', 'price' => '$139.900 COP', 'img' => self::IMG_URBANO, 'href' => '#'],
            ['name' => 'Wrap Top', 'price' => '$79.900 COP', 'img' => self::IMG_BAILARINA, 'href' => '#'],
        ];
    }
}
