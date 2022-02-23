<?php

namespace Illuminate\Http;

use Illuminate\Http\Concerns\InteractsWithContentTypes;
use Illuminate\Http\Concerns\InteractsWithInput;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class Request extends SymfonyRequest
{
    use InteractsWithContentTypes,
        InteractsWithInput;

    protected $json;

    public static function capture()
    {
        static::enableHttpMethodParameterOverride();

        return static::createFromBase(SymfonyRequest::createFromGlobals());
    }

    /**
     * @desc 创建一个reques  来着symfony
     * @param SymfonyRequest $request
     * @return Request|SymfonyRequest
     */
    public static function createFromBase(SymfonyRequest $request)
    {
        if ($request instanceof static) {
            return $request;
        }

        $newRequest = (new static)->duplicate(
            $request->query->all(), $request->request->all(), $request->attributes->all(),
            $request->cookies->all(), $request->files->all(), $request->server->all()
        );

        $newRequest->headers->replace($request->headers->all());

        $newRequest->content = $request->content;

        $newRequest->request = $newRequest->getInputSource();

        return $newRequest;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected function getInputSource()
    {
        if ($this->isJson()) {
            return $this->json();
        }

        return in_array($this->getRealMethod(), ['GET', 'HEAD']) ? $this->query : $this->request;
    }

    public function json($key = null, $default = null)
    {
        if (! isset($this->json)) {
            $this->json = new ParameterBag((array) json_decode($this->getContent(), true));
        }

        if (is_null($key)) {
            return $this->json;
        }

        return data_get($this->json->all(), $key, $default);
    }
}