<?php

namespace Illuminate\Container;

use ReflectionClass;
use ReflectionException;

class Container {

    /**
     * @param $abstract
     * @desc 生产实例
     * @return object
     * @throws ReflectionException
     */
    public function make($abstract)
    {
        return $this->resolve($abstract);
    }

    /**
     * @param $abstract
     * @desc 解析抽象
     * @return object
     * @throws ReflectionException
     */
    public function resolve($abstract)
    {
        $concrete = $abstract;
        return $this->build($concrete);
    }

    /**
     * @param $concrete
     * @desc 构建实例
     * @return object
     * @throws ReflectionException
     */
    public function build($concrete)
    {
        $reflection = new ReflectionClass($concrete);
        $constructor = $reflection->getConstructor();
        if (is_null($constructor)) {
            return new $concrete;
        }
        $dependencies = $constructor->getParameters();
        $instances = $this->resolveDependencies($dependencies);
        return $reflection->newInstanceArgs($instances);
    }

    /**
     * @param $dependencies
     * @desc 解析依赖抽象
     * @return array
     * @throws ReflectionException
     */
    public function resolveDependencies(array $dependencies)
    {
        $results = [];
        foreach ($dependencies as $dependency) {
            $results[] = $this->make($dependency->getName());
        }
        return $results;
    }

}