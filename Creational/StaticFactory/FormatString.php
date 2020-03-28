<?php

namespace Creational\StaticFactory;

class FormatString implements FormatterInterface
{
    public function format(string $input): string
    {
        return trim($input);
    }
}