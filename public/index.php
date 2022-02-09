<?php

use Illuminate\Container\Container;

require __DIR__.'/../vendor/autoload.php';


class Log
{

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

class Remind{
    public function getRemind()
    {
        echo 'remind';
    }
}

$container = new Container();


$log = new Log();

$container->instance('ddd', $log);

//$container->rebinding('ddd', function ($c, $i){
//    var_dump($c, $i);
//});

$container->refresh('ddd', new Remind(), 'getRemind');

$container->instance('ddd', $log);
$a = $container->make('ddd');

var_dump($a);

//$container->when(Log::class)->needs(Sys::class)->give(File::class);
//var_dump($container);
//$log = $container->make(Log::class);
//
//var_dump($log);
