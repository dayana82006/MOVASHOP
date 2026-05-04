<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Promotion;

final class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home', [
            'bodyClass' => 'mova-home',
            'title' => 'MOVA — Ropa de baile',
            'heroSlides' => Promotion::heroSlides(),
            'categories' => Category::all(),
            'productShowcase' => Product::homeShowcase(),
            'nuevaColeccion' => Promotion::nuevaColeccionBanner(),
            'valueProps' => [
                ['icon' => 'leaf', 'title' => 'Telas Premium', 'text' => 'Suavidad y máxima elasticidad.'],
                ['icon' => 'dance', 'title' => 'Diseños que fluyen', 'text' => 'Libertad total para expresarte.'],
                ['icon' => 'heart', 'title' => 'Hecho para bailarines', 'text' => 'Probado por bailarines, creado para destacar.'],
                ['icon' => 'box', 'title' => 'Envíos a todo el país', 'text' => 'Rápido, seguro y con seguimiento.'],
            ],
            'trustItems' => [
                ['icon' => 'card', 'title' => 'Paga seguro', 'text' => 'Tarjetas, PSE, Nequi y más.'],
                ['icon' => 'refresh', 'title' => 'Cambios fáciles', 'text' => 'Tienes 30 días para cambiar tu producto.'],
                ['icon' => 'headset', 'title' => 'Atención al cliente', 'text' => 'Estamos aquí para ayudarte.'],
                ['icon' => 'gift', 'title' => 'MOVA Points', 'text' => 'Acumula puntos y obtén beneficios.'],
            ],
        ]);
    }
}
