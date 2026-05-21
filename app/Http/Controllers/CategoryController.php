<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Contracts\View\View;

final class CategoryController extends Controller
{
    public function show(string $slug): View
    {
        $category = Category::findBySlug($slug);
        if ($category === null) {
            abort(404, 'Categoría no encontrada');
        }

        if ($category->slug === 'urbano') {
            return view('category-urbano', [
                'title' => 'Urbano — MOVA',
                'category' => $category,
                'heroSlides' => Promotion::heroSlides(),
                'valueProps' => [
                    ['icon' => 'leaf', 'title' => 'Telas Premium', 'text' => 'Suavidad y máxima elasticidad.'],
                    ['icon' => 'dance', 'title' => 'Diseños que fluyen', 'text' => 'Libertad total para expresarte.'],
                ],
                'products' => [
                    ['name' => 'Sudadera capucha Urbano', 'old' => '$56.000 COP', 'price' => '$45.000 COP', 'img' => '/assets/imagenes/urban.png'],
                    ['name' => 'Hoodie gráfico MOVA', 'old' => '$52.000 COP', 'price' => '$42.000 COP', 'img' => '/assets/imagenes/urban2.png'],
                    ['name' => 'Top oversize Urbano', 'old' => '$48.000 COP', 'price' => '$38.000 COP', 'img' => '/assets/imagenes/urbano.png'],
                    ['name' => 'Sudadera cropped Street', 'old' => '$54.000 COP', 'price' => '$44.000 COP', 'img' => '/assets/imagenes/bailarinainicio.png'],
                ],
            ]);
        }

        return view('category', [
            'title' => $category->name . ' — MOVA',
            'category' => $category,
        ]);
    }
}
