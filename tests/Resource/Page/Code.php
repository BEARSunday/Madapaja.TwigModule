<?php

namespace Madapaja\TwigModule\Resource\Page;

use BEAR\Resource\ResourceObject;

class Code extends ResourceObject
{
    public function onGet()
    {
        $this->code = 200;
        $this->headers['Last-Modified'] = 'Tue, 15 Nov 1994 12:45:26 GMT';

        return $this;
    }
}
