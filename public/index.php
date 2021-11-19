<?php

use Illuminate\Container\Container;

require __DIR__.'/../vendor/autoload.php';


class Log
{
    public $file;
    public function __construct(File $file)
    {
        $this->file = $file;
    }
}

class File
{

}

$container = new Container();

$log = $container->make(Log::class);
var_dump($log);