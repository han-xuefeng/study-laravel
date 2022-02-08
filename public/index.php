<?php

use Illuminate\Container\Container;

require __DIR__.'/../vendor/autoload.php';


class Log
{
    public $sys;
    public function __construct(Sys $sys)
    {
        $this->sys = $sys;
    }
}

class File implements Sys
{

}

interface Sys{

}

class Dir
{
    private function __construct()
    {

    }
}

$container = new Container();



$container->when(Log::class)->needs(Sys::class)->give(File::class);
var_dump($container);
$log = $container->make(Log::class);

var_dump($log);
