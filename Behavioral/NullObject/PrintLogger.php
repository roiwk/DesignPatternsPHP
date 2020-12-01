<?php

namespace Behavioral\NullObject;

class PrintLogger implements LoggerInterface
{
    public function log(string $str)
    {
        echo $str;
    }
}