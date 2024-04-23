<?php
error_reporting(-1);
ini_set('display_errors', 1);

define('BASE_URL', ($_SERVER['SERVER_PORT'] == 443 ? 'https' : 'http') . "://{$_SERVER['SERVER_NAME']}" . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']));
define('DIR', __DIR__ . "/");

require DIR . 'vendor/autoload.php';

foreach(glob(DIR . 'src/Helpers/*.php') as $helper)
{
    require_once $helper;
}

use App\Libraries\Router;

$router = new Router();
$routes = require DIR . 'src/Configs/Routes.php';

foreach ($routes as $group => $groupRoutes) {
    foreach ($groupRoutes as $route => $controller) {
        if ($group === 'admin') {
            $route = '/admin' . $route;
        }
        $router->addRoute($route, $controller);
    }
}

$router->dispatch($_SERVER['REQUEST_URI'] ?? '');
