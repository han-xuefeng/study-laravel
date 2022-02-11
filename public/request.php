<?php


use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../vendor/autoload.php';
//
//$request = new Request($_GET, $_POST, $_COOKIE, $_SERVER, $_FILES);
//
//$request = $request->duplicate(['b'=>2]);


$request = Request::create('http:127.0.0.1/a?b=2');

echo '<pre>';
print_r($request);