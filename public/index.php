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

interface File
{

}

class Dir
{
    private function __construct()
    {

    }
}

$container = new Container();

$log = $container->make(File::class);
$log = $container->make(Dir::class);
var_dump($log);