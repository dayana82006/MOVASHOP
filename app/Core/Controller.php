<?php

declare(strict_types=1);

namespace App\Core;

abstract class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);
        $viewFile = dirname(__DIR__, 2) . '/app/Views/' . str_replace('.', '/', $view) . '.php';
        if (!is_file($viewFile)) {
            http_response_code(500);
            echo 'Vista no encontrada.';
            return;
        }
        require $viewFile;
    }

    protected function render(string $view, array $data = [], string $layout = 'layout'): void
    {
        $config = require dirname(__DIR__, 2) . '/config/config.php';
        ob_start();
        $this->view($view, $data);
        $content = ob_get_clean();
        $this->view($layout, array_merge($data, ['content' => $content, 'config' => $config]));
    }
}
