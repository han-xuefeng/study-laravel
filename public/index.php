<?php

use Illuminate\Container\Container;

require __DIR__.'/../vendor/autoload.php';


class Log
{
    public $file;
    public $dir;
    public function __construct(File $file, Dir $dir)
    {
        $this->file = $file;
        $this->dir = $dir;
    }
}

class File
{

}

class Dir
{
    private function __construct()
    {

    }
}

$container = new Container();

$log = $container->make(Log::class);
