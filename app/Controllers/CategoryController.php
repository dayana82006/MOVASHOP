<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Category;
use App\Models\Promotion;

final class CategoryController extends Controller
{
    /** @param array<string, string> $params */
    public function show(array $params): void
    {
        $slug = $params['slug'] ?? '';
        $category = Category::findBySlug($slug);
        if ($category === null) {
            http_response_code(404);
            echo '<!DOCTYPE html><html lang="es"><head><meta charset="utf-8"><title>404</title></head><body><p>Categoría no encontrada</p><a href="/">Volver al inicio</a></body></html>';
            return;
        }

        if ($category->slug === 'urbano') {
            $this->render('category-urbano', [
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
            ], 'layout-urbano');
            return;
        }

        $this->render('category', [
            'title' => $category->name . ' — MOVA',
            'category' => $category,
        ]);
    }
}
