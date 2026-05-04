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
                    ['name' => 'Sudadera capucha Urbano', 'old' => '$56.000 COP', 'price' => '$45.000 COP', 'img' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=600&q=80'],
                    ['name' => 'Hoodie gráfico MOVA', 'old' => '$52.000 COP', 'price' => '$42.000 COP', 'img' => 'https://images.unsplash.com/photo-1578587018452-892b21fd22d1?w=600&q=80'],
                    ['name' => 'Top oversize Urbano', 'old' => '$48.000 COP', 'price' => '$38.000 COP', 'img' => 'https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=600&q=80'],
                    ['name' => 'Sudadera cropped Street', 'old' => '$54.000 COP', 'price' => '$44.000 COP', 'img' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&q=80'],
                ],
            ]);
        }

        return view('category', [
            'title' => $category->name . ' — MOVA',
            'category' => $category,
        ]);
    }
}
