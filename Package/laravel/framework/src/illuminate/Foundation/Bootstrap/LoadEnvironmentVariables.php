<?php

namespace Illuminate\Foundation\Bootstrap;

use Dotenv\Dotenv;
use Dotenv\Environment\Adapter\EnvConstAdapter;
use Dotenv\Environment\Adapter\PutenvAdapter;
use Dotenv\Environment\Adapter\ServerConstAdapter;
use Dotenv\Environment\DotenvFactory;
use Illuminate\Contracts\Foundation\Application;

class LoadEnvironmentVariables
{
    public function bootstrap(Application $app)
    {
        $this->createDotenv($app)->safeLoad();
    }

    protected function createDotenv(Application $app)
    {
        return Dotenv::create(
            $app->environmentPath(),
            $app->environmentFile(),
            new DotenvFactory([new EnvConstAdapter, new ServerConstAdapter, new PutenvAdapter])
        );
    }

}