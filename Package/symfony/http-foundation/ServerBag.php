<?php


namespace Symfony\Component\HttpFoundation;


class ServerBag extends ParameterBag
{
    public function getHeaders()
    {
        $headers = [];

        foreach ($this->parameters as $key => $value) {
            if (0 === strpos($key, 'HTTP_')) {
                $headers[substr($key, 5)] = $value;
            } elseif (in_array($key, ['CONTENT_TYPE', 'CONTENT_LENGTH', 'CONTENT_MDS'], true)) {
                $headers[$key] = $value;
            }
        }

        return $headers;
    }
}