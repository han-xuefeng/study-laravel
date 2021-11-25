<?php

namespace Illuminate\Container;

use Illuminate\Contracts\Container\BindingResolutionException;
use ReflectionClass;
use ReflectionException;

class Container {

    /**
     * @var array 构建栈
     */
    protected $buildStack = [];
    /**
     * @param $abstract
     * @desc 生产实例
     * @return object
     * @throws ReflectionException|BindingResolutionException
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
     * @throws BindingResolutionException
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
     * @throws BindingResolutionException
     */
    public function build($concrete)
    {
        try {
            $reflection = new ReflectionClass($concrete);
        } catch (ReflectionException $exception) {
            // 第三个参数用来显示 Stack trace, 传入上一次的异常
            throw new BindingResolutionException("没有找到实例[".$concrete."]", 0, $exception);
        }

        if (!$reflection->isInstantiable()) {
            // 当前类不能实例化的时候
            $this->notInstantiable($concrete);
        }

        $this->buildStack[] = $concrete;

        $constructor = $reflection->getConstructor();
        if (is_null($constructor)) {
            array_pop($this->buildStack);
            return new $concrete;
        }
        $dependencies = $constructor->getParameters();
        $instances = $this->resolveDependencies($dependencies);

        array_pop($this->buildStack);

        return $reflection->newInstanceArgs($instances);
    }

    /**
     * @param array $dependencies
     * @return array
     * @throws BindingResolutionException
     * @throws ReflectionException
     * @desc 解析依赖抽象
     */
    public function resolveDependencies(array $dependencies)
    {
        $results = [];
        foreach ($dependencies as $dependency) {
            $results[] = $this->make($dependency->getName());
        }
        return $results;
    }

    /**
     * @param $concrete
     * @desc 如果类不能被实例化，抛出异常 interface abstract private::__construct protected::__construct trait
     * @throws BindingResolutionException
     */
    public function notInstantiable($concrete)
    {
        if (!empty($this->buildStack)) {
            $concrete = implode(',', $this->buildStack);
        }
        $message = "目标实例[".$concrete."]不能被实例化";
        throw new BindingResolutionException($message);
    }
}

/**
 * 1. 如果容器传入不存在的实例的时候，我们引入BindingResolutionException来自定义我们返回的异常信息
 * 2. 如果容器传入不能被实例化的类的时候，我们引入BindingResolutionException来自定义我们返回的异常信息
 * 3.
 */