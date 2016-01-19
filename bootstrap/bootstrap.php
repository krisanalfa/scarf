<?php

$baseDir = dirname(__DIR__);

// Require Autoload file
require_once $baseDir.'/vendor/autoload.php';

// Create new application instance
$GLOBALS['app'] = $app = new Scarf\Scarf();

// Boot application
$app->boot();

// Add service provider
// $app->register([
//     // 'Illuminate\Events\EventServiceProvider',
//     // 'Illuminate\Filesystem\FilesystemServiceProvider',
//     // 'Illuminate\Encryption\EncryptionServiceProvider',
//     // 'Illuminate\Cache\CacheServiceProvider',
//     // 'Illuminate\Session\SessionServiceProvider',
//     // 'Illuminate\Database\DatabaseServiceProvider',
// ]);

// Application service provider
$app->register([
    'App\Providers\RouteServiceProvider',
]);

// Add a middleware
// $app->add([
//     // 'Illuminate\Session\Middleware\StartSession',
// ]);

// Add facades ability
// $app->withFacades();

return $app;
