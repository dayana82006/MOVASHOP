<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

final class ExportStaticCommand extends Command
{
    protected $signature = 'mova:export-static';

    protected $description = 'Exporta las vistas principales a HTML estático en public/ (despliegue Netlify)';

    public function handle(HomeController $home, CategoryController $categories): int
    {
        $appUrl = env('DEPLOY_PRIME_URL') ?: env('URL') ?: config('app.url');
        if (is_string($appUrl) && $appUrl !== '') {
            config(['app.url' => rtrim($appUrl, '/')]);
        }

        $this->write('index.html', $home->index());
        $this->write('categoria/urbano/index.html', $categories->show('urbano'));

        foreach (Category::all() as $category) {
            if ($category->slug === 'urbano') {
                continue;
            }
            $this->write("categoria/{$category->slug}/index.html", $categories->show($category->slug));
        }

        File::put(public_path('_redirects'), implode("\n", [
            '/categoria/urbano /categoria/urbano/index.html 200',
        ]) . "\n");

        $this->info('HTML estático exportado en public/');

        return self::SUCCESS;
    }

    private function write(string $relativePath, mixed $response): void
    {
        $html = match (true) {
            $response instanceof ViewContract => $response->render(),
            $response instanceof Response => $response->getContent(),
            default => (string) $response,
        };

        $target = public_path($relativePath);
        File::ensureDirectoryExists(dirname($target));
        File::put($target, $html);
        $this->line("  → public/{$relativePath}");
    }
}
