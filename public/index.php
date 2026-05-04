<?php

declare(strict_types=1);

define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/autoload.php';
require BASE_PATH . '/app/helpers.php';

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Core\Router;

$router = new Router();
$router->get('/', HomeController::class, 'index');
$router->get('/categoria/{slug}', CategoryController::class, 'show');

$router->dispatch($_SERVER['REQUEST_URI'] ?? '/');
