<?php


namespace Symfony\Component\HttpFoundation;


class ParameterBag implements \IteratorAggregate, \Countable
{
    protected $parameters;

    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    public function all(): array
    {
        return $this->parameters;
    }

    public function keys()
    {
        return array_keys($this->parameters);
    }

    public function get($key, $default = '')
    {
        return $this->parameters[$key] ?? $default;
    }

    public function set($key, $value)
    {
        $this->parameters[$key] = $value;
    }

    public function add($parameters)
    {
        $this->parameters = array_replace($this->parameters, $parameters);
    }

    public function remove($key)
    {
        unset($this->parameters[$key]);
    }

    public function has($key)
    {
        return array_key_exists($key, $this->parameters);
    }

    public function replace($params)
    {
        $this->parameters = $params;
    }

    public function getAlpha($key, $default = '')
    {
        return preg_replace('/[^[:alpha:]]/', '', $this->get($key, $default));
    }

    public function getAlnum($key, $default = '')
    {
        return preg_replace('/[^[:alnum:]]/', '', $this->get($key, $default));
    }

    public function getDigits($key, $default = '')
    {
        return str_replace(['-', '+'], '', $this->filter($key, $default, FILTER_SANITIZE_NUMBER_INT));
    }

    public function filter($key, $default = null, $filter = FILTER_DEFAULT, $option = [])
    {
        $value = $this->get($key, $default);

        if (!\is_array($option) && $option) {
            $option = ['flags' => $option];
        }

        if (\is_array($value) && !isset($option['flags'])) {
            $option = ['flags' => FILTER_REQUIRE_ARRAY];
        }

        return filter_var($value, $filter, $option);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->parameters);
    }

    public function count()
    {
        return \count($this->parameters);
    }
}