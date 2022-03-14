<?php


require __DIR__.'/../vendor/autoload.php';

$app = new \Illuminate\Foundation\Application();

$path = __DIR__.'/../';

$app->useEnvironmentPath($path);
$app->loadEnvironmentFrom('.env');

$envObj = new \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables();

$envObj->bootstrap($app);

var_dump($_ENV);