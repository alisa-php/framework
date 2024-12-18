<?php

use Alisa\Alisa;
use App\Models\User;
use Dotenv\Dotenv;
use Illuminate\Container\Container;

Dotenv::createImmutable(__DIR__ . '/../..')->load();

$config = require __DIR__ . '/../../config/app.php';

date_default_timezone_set($config['timezone']);

$config['assets'] = require __DIR__ . '/../../config/assets.php';
$config['buttons'] = require __DIR__ . '/../../config/buttons.php';
$config['components'] = require __DIR__ . '/../../config/components.php';
$config['scene'] = require __DIR__ . '/../../config/scene.php';

$middlewares = require __DIR__ . '/../../config/middlewares.php';
$config['middlewares'] = $middlewares['alias'];

$alisa = new Alisa($config);

$alisa->middleware($middlewares['global']);

Container::getInstance()->singleton(Alisa::class, fn () => $alisa);

require __DIR__ . '/database.php';

$user = User::createOrGetUser();

Container::getInstance()->singleton('user', fn () => $user);

foreach (require __DIR__ . '/../../config/routes.php' as $route) {
    require __DIR__ . '/../../routes/' . trim($route, '\/') . '.php';
}

return $alisa;