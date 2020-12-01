<?php

namespace Behavioral\NullObject;

class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
        // do nothing
    }
}