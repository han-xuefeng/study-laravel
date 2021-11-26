<?php

use Illuminate\Container\Container;

require __DIR__.'/../vendor/autoload.php';


class Log
{
    public $file;
    public function __construct(File $file, Dir $a)
    {
        $this->file = $file;
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

$file = new File();
$log = $container->make(Log::class, ['file'=>$file]);
//$log = $container->make(Dir::class);
