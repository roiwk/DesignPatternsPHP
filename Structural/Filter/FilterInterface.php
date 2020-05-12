<?php

namespace Structural\Filter;

interface FilterInterface
{
    public function filter(array $persons): array;
}
