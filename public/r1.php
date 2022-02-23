<?php

require __DIR__.'/../vendor/autoload.php';

use Illuminate\Http\Request;

$request = Request::capture();

var_dump($request);