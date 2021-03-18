<?php

namespace Behavioral\Strategy;

interface Comparator
{
    public function compare($a, $b): int;
}