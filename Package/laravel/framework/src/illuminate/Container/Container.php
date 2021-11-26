<?php

namespace Illuminate\Container;

use Illuminate\Contracts\Container\BindingResolutionException;
use ReflectionClass;
use ReflectionException;
use ReflectionParameter;

class Container {

    /**
     * @var array 构建栈
     */
    protected $buildStack = [];

    protected $with = [];

    /**
     * @param $abstract
     * @param array $parameter
     * @return object
     * @throws BindingResolutionException
     * @throws ReflectionException
     * @desc 生产实例
     */
    public function make($abstract, $parameter = [])
    {
        return $this->resolve($abstract, $parameter);
    }

    /**
     * @param $abstract
     * @param array $parameter
     * @return object
     * @throws BindingResolutionException
     * @throws ReflectionException
     * @desc 解析抽象
     */
    protected function resolve($abstract, $parameter =[])
    {
        $concrete = $abstract;
        $this->with[] = $parameter;
        return $this->build($concrete);
    }

    /**
     * @param $concrete
     * @return object
     * @throws BindingResolutionException
     * @throws ReflectionException
     * @desc 构建实例
     */
    protected function build($concrete)
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
        // 抛出异常， 并将该实例移除构建站
        try {
            $instances = $this->resolveDependencies($dependencies);
        } catch (BindingResolutionException $exception) {
            array_pop($this->buildStack);
            throw $exception;
        }


        array_pop($this->buildStack);

        return $reflection->newInstanceArgs($instances);
    }

    /**
     * @param array $dependencies ReflectionParameter[]
     * @return array
     * @throws BindingResolutionException
     * @throws ReflectionException
     * @desc 解析依赖抽象
     */
    protected function resolveDependencies(array $dependencies)
    {
        $results = [];

        foreach ($dependencies as $dependency) {
            /**
             * 判断依赖是否做了参数覆盖
             */
            if ($this->hasParameterOverride($dependency)) {
                $results[] = $this->getParameterOverride($dependency);
                continue;
            }

            if ($dependency->getClass() == null) {
                $this->resolvePrimitive($dependency);
            } else {
                $results[] = $this->make($dependency->getName());
            }

        }
        return $results;
    }

    /**
     * 如果参数是一个字符串或者其他基于, 不是我们想要的依赖，需要判断其是否有默认值，如果有默认值返回默认值，如果没有默认值 抛出异常
     * @param $dependency ReflectionParameter
     * @return mixed
     * @throws ReflectionException
     * @throws BindingResolutionException
     */
    protected function resolvePrimitive(ReflectionParameter $dependency)
    {
        if ($dependency->isDefaultValueAvailable()) {
            return $dependency->getDefaultValue();
        }

        $this->unresolvePrimitive($dependency);
    }

    /**
     * @desc 抛出异常 不能被解析
     * @param ReflectionParameter $dependency
     * @throws BindingResolutionException
     */
    protected function unResolvePrimitive(ReflectionParameter $dependency)
    {
        $message = "Unresolvable dependency resolving [$dependency] in class {$dependency->getDeclaringClass()->getName()}";

        throw new BindingResolutionException($message);
    }

    /**
     * 获取依赖的覆盖参数
     * @param $dependency ReflectionParameter
     * @return mixed
     */
    protected function getParameterOverride($dependency)
    {
        return $this->getLastParameterOverride()[$dependency->name];
    }

    /**
     * @param $dependency
     * @desc 判断参数是否做了参数覆盖
     * @return bool
     */
    protected function hasParameterOverride($dependency)
    {
        return array_key_exists(
            $dependency->name, $this->getLastParameterOverride()
        );
    }

    protected function getLastParameterOverride()
    {
        return count($this->with) ? end($this->with) : [];
    }

    /**
     * @param $concrete
     * @desc 如果类不能被实例化，抛出异常 interface abstract private::__construct protected::__construct trait
     * @throws BindingResolutionException
     */
    protected function notInstantiable($concrete)
    {
        if (!empty($this->buildStack)) {
            $concrete = implode(',', $this->buildStack);
        }
        $message = "目标实例[".$concrete."]不能被实例化";
        throw new BindingResolutionException($message);
    }
}

/**
 * 实例化类遇到的问题
 * 1. 如果容器传入不存在的实例的时候，我们引入BindingResolutionException来自定义我们返回的异常信息
 * 2. 如果容器传入不能被实例化的类的时候，我们引入BindingResolutionException来自定义我们返回的异常信息
 * 3. 引入构建站，来查看为实施化的实例
 * 4. 捕捉依赖解析抛出的异常
 *
 *
 * 解析依赖：
 * 1.如果没有传入的依赖没有约定，那么此时使用反射类构建参数是，会把参数变量名作为类名称去实例化并抛出异常，此时我们引入with参数来覆盖类做约定的参数。
 * 2.如果没传默认值，而且不能被实例化的依赖，如string  引入这个方法处理resolvePrimitive
 *
 */