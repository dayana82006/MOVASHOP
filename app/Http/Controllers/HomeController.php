<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\HomeContent;
use Illuminate\View\View;

final class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'bodyClass' => 'mova-home',
            'title' => 'MOVA — Ropa de baile',
            'homeHero' => HomeContent::heroDual(),
            'moments' => HomeContent::moments(),
            'collections' => HomeContent::collections(),
            'favorites' => HomeContent::favorites(),
            'trustItems' => [
                ['icon' => 'box', 'title' => 'Envíos a todo el país', 'text' => 'Rápidos y seguros.'],
                ['icon' => 'refresh', 'title' => 'Cambios fáciles', 'text' => 'Tienes 30 días.'],
                ['icon' => 'headset', 'title' => 'Atención al cliente', 'text' => 'Estamos aquí para ayudarte.'],
                ['icon' => 'gift', 'title' => 'MOVA Points', 'text' => 'Acumula puntos y obtén beneficios.'],
            ],
        ]);
    }
}
