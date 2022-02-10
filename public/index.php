<?php

use Illuminate\Container\Container;

require __DIR__.'/../vendor/autoload.php';


class Log
{
    public static function getName(Dep $dep)
    {
        var_dump($dep);
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

class Remind{
    public function getRemind()
    {
        echo 'remind';
    }
}

class Dep{

}

$container = new Container();


$container->call('Log::getName', ['name' => 333]);


//$log = new Log();

# 装饰模式 extend

//$container->extend(Log::class, function ($obj, Container $container) {
//    return new Remind();
//});
//
//$container->extend(Log::class, function ($obj, Container $container) {
//    return new File();
//});
//
//$obj = $container->make(Log::class);
//var_dump($obj);

//$container->bind(Log::class, function () {
//    return new Remind();
//});
//
//// 装饰模式
//$obj = $container->make(Log::class);
//var_dump($obj);


//$container->instance('ddd', $log);

//$container->rebinding('ddd', function ($c, $i){
//    var_dump($c, $i);
//});

//$container->refresh('ddd', new Remind(), 'getRemind');
//
//$container->instance('ddd', $log);
//$a = $container->make('ddd');

//$container->when(Log::class)->needs(Sys::class)->give(File::class);
//var_dump($container);
//$log = $container->make(Log::class);
//
//var_dump($log);
