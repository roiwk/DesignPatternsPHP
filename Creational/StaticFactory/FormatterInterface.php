<?php

namespace Creational\StaticFactory;

interface FormatterInterface
{
    public function format(string $input): string;
}