<?php

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

// Copy storage to /tmp (writable on Vercel serverless)
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    foreach ([
        '/tmp/storage/app/public',
        '/tmp/storage/framework/cache/data',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/framework/views',
        '/tmp/storage/logs',
        '/tmp/bootstrap/cache',
    ] as $dir) {
        mkdir($dir, 0755, true);
    }
}

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');
$app->instance('path.storage', '/tmp/storage');
$app->instance('path.bootstrap', '/tmp/bootstrap');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
