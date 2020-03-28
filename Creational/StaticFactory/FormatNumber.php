<?php

namespace Creational\StaticFactory;

class FormatNumber implements FormatterInterface
{
    public function format(string $input): string
    {
        return number_format(floatval($input));
    }
}