<?php

declare(strict_types=1);

namespace App\Models;

/** Contenido estático de la landing de inicio (sustituir por BD). */
final class HomeContent
{
    /** @return array{imgLeft:string,imgRight:string,title:string,subtitle:string,cta1:array{label:string,href:string},cta2:array{label:string,href:string}} */
    public static function heroDual(): array
    {
        return [
            'imgLeft' => '/assets/imagenes/inicio.png',
            'imgRight' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=700&q=80',
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
            ['title' => 'Día a día', 'text' => 'Esenciales para vivir con estilo.', 'img' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&q=80', 'href' => '#'],
            ['title' => 'Trabajo', 'text' => 'Minimalismo que te acompaña.', 'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500&q=80', 'href' => '#'],
            ['title' => 'Movimiento', 'text' => 'Diseñada para entrenar, crear y expresarte.', 'img' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?w=500&q=80', 'href' => '#'],
            ['title' => 'Street', 'text' => 'Actitud, comodidad y libertad.', 'img' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500&q=80', 'href' => '/categoria/urbano'],
        ];
    }

    /** @return list<array{name:string,text:string,img:string,href:string}> */
    public static function collections(): array
    {
        return [
            ['name' => 'Essentials', 'text' => 'Piezas atemporales para cualquier ocasión.', 'img' => 'https://images.unsplash.com/photo-1434389677669-e08b4cac3105?w=500&q=80', 'href' => '#'],
            ['name' => 'Elevated Basics', 'text' => 'Lo esencial, pero elevado.', 'img' => 'https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=500&q=80', 'href' => '#'],
            ['name' => 'Dance Edit', 'text' => 'Funcionalidad y belleza en cada movimiento.', 'img' => 'https://images.unsplash.com/photo-1547153760-18fc86324498?w=500&q=80', 'href' => '#'],
            ['name' => 'Minimal Edit', 'text' => 'Menos es más. Siempre.', 'img' => 'https://images.unsplash.com/photo-1509631179647-0177331693ae?w=500&q=80', 'href' => '#'],
        ];
    }

    /** @return list<array{name:string,price:string,img:string,href:string}> */
    public static function favorites(): array
    {
        return [
            ['name' => 'Cropped Tee', 'price' => '$89.900 COP', 'img' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=500&q=80', 'href' => '#'],
            ['name' => 'Pantalón Flow', 'price' => '$129.900 COP', 'img' => 'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=500&q=80', 'href' => '#'],
            ['name' => 'Chaqueta Mova', 'price' => '$139.900 COP', 'img' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=500&q=80', 'href' => '#'],
            ['name' => 'Wrap Top', 'price' => '$79.900 COP', 'img' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=500&q=80', 'href' => '#'],
        ];
    }
}
