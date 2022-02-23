<?php


namespace Illuminate\Http\Concerns;


trait InteractsWithInput
{
    public function header($key = null, $default = null)
    {
        return $this->retrieveItem('headers', $key, $default);
    }

    protected function retrieveItem($source, $key, $default)
    {
        if (is_null($key)) {
            return $this->$source->all();
        }

        return $this->$source->get($key, $default);
    }
}