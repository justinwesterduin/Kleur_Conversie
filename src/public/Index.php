<?php
declare(strict_types=1);

use Core\Router;
use App\Controllers\ColorConverterController;

require '../loader.php';

$router = new Router();
$router->get('/', ColorConverterController::class, 'index');
$router->dispatch();