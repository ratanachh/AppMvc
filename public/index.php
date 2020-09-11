<?php

use App\Application;

error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/src');

define('BASE_URI', implode('/', explode($_SERVER['PATH_INFO'] ?? '/', $_SERVER['REQUEST_URI'])));

require_once BASE_PATH . '/vendor/autoload.php';


/**
 * Load .env configurations
 */
Dotenv\Dotenv::createImmutable(BASE_PATH)->load();


$app = new Application(APP_PATH);

echo $app->run();