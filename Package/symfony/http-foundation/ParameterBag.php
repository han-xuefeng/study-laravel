<?php


namespace Symfony\Component\HttpFoundation;


class ParameterBag
{
    protected $parameters;

    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }
}