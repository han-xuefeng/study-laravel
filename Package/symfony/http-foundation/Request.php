<?php

namespace Symfony\Component\HttpFoundation;

class Request
{


    public $query;
    public $request;
    public $cookie;
    public $server;
    public $files;
    protected $content; // body体

    /**
     * Request constructor.
     * @param $query
     * @param $request
     * @param $cookie
     * @param $server
     * @param $files
     * @param $content
     */
    public function __construct($query = [], $request = [], $cookie = [], $server = [], $files = [], $content = [])
    {
        $this->initialize($query, $request, $cookie, $server, $files, $content);
    }

    protected function initialize($query = [], $request = [], $cookie = [], $server = [], $files = [], $content = [])
    {
        $this->query = new ParameterBag($query);
        $this->request = new ParameterBag($request);
        $this->cookie = new ParameterBag($cookie);
        $this->server = new ServerBag($server);
        $this->files = new FileBag($files);
//        $this->content = new ParameterBag($content);
    }

    /**
     * 使用超全局变量创建request实例
     */
    public static function createFromGlobals()
    {
        $request = self::createRequestFromFactory($_GET, $_POST, $_COOKIE, $_SERVER, $_FILES);

        return $request;
    }

    private static function createRequestFromFactory($query = [], $request = [], $cookie = [], $server = [], $files = [], $content = [])
    {
        return new static($query, $request, $cookie, $server, $files, $content);
    }

    public function duplicate(array $query = null, array $request = null, array $cookie = null, array $server = null, array $files = null, array $content = null)
    {
        $requestObj = clone $this;

        if ($query !== null) {
            $requestObj->query = new ParameterBag($query);
        }

        if ($request !== null) {
            $requestObj->request = new ParameterBag($request);
        }

        if ($cookie !== null) {
            $requestObj->cookie = new ParameterBag($cookie);
        }

        if ($server !== null) {
            $requestObj->server = new ServerBag($server);
        }

        if ($files !== null) {
            $requestObj->files = new FileBag($files);
        }
        return $requestObj;
    }

    public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $server = [], $files = [], $content = null)
    {
        $server = array_replace([
            'SERVER_NAME' => 'localhost',
            'SERVER_PORT' => 80,
            'HTTP_HOST' => 'localhost',
            'HTTP_USER_AGENT' => 'Symfony',
            'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'HTTP_ACCEPT_LANGUAGE' => 'en-us,en;q=0.5',
            'HTTP_ACCEPT_CHARSET' => 'ISO-8859-1,utf-8;q=0.7,*;q=0.7',
            'REMOTE_ADDR' => '127.0.0.1',
            'SCRIPT_NAME' => '',
            'SCRIPT_FILENAME' => '',
            'SERVER_PROTOCOL' => 'HTTP/1.1',
            'REQUEST_TIME' => time(),
            'REQUEST_TIME_FLOAT' => microtime(true),
        ], $server);

        $server['PATH_INFO'] = '';
        $server['REQUEST_METHOD'] = strtoupper($method);

        $components = parse_url($uri);
        if (isset($components['host'])) {
            $server['SERVER_NAME'] = $components['host'];
            $server['HTTP_HOST'] = $components['host'];
        }

        if (isset($components['scheme'])) {
            if ('https' === $components['scheme']) {
                $server['HTTPS'] = 'on';
                $server['SERVER_PORT'] = 443;
            } else {
                unset($server['HTTPS']);
                $server['SERVER_PORT'] = 80;
            }
        }

        if (isset($components['port'])) {
            $server['SERVER_PORT'] = $components['port'];
            $server['HTTP_HOST'] .= ':'.$components['port'];
        }

        if (isset($components['user'])) {
            $server['PHP_AUTH_USER'] = $components['user'];
        }

        if (isset($components['pass'])) {
            $server['PHP_AUTH_PW'] = $components['pass'];
        }

        if (!isset($components['path'])) {
            $components['path'] = '/';
        }

        switch (strtoupper($method)) {
            case 'POST':
            case 'PUT':
            case 'DELETE':
                if (!isset($server['CONTENT_TYPE'])) {
                    $server['CONTENT_TYPE'] = 'application/x-www-form-urlencoded';
                }
            case 'PATCH':
                $request = $parameters;
                $query = [];
                break;
            default:
                $request = [];
                $query = $parameters;
                break;
        }

        $queryString = '';
        if (isset($components['query'])) {
            parse_str(html_entity_decode($components['query']), $qs);

            if ($query) {
                $query = array_replace($qs, $query);
                $queryString = http_build_query($query, '', '&');
            } else {
                $query = $qs;
                $queryString = $components['query'];
            }
        } elseif ($query) {
            $queryString = http_build_query($query, '', '&');
        }

        $server['REQUEST_URI'] = $components['path'].('' !== $queryString ? '?'.$queryString : '');
        $server['QUERY_STRING'] = $queryString;
        return self::createRequestFromFactory($query, $request, $cookies, $server, $files);
    }
}