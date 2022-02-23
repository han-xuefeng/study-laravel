<?php

namespace Illuminate\Http\Concerns;

use Illuminate\Support\Str;

trait InteractsWithContentTypes
{
    public function isJson()
    {
        return Str::contains($this->header('CONTENT_TYPE'), ['/json', '+json']);
    }
}