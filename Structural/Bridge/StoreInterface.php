<?php

namespace Structural\Bridge;

interface StoreInterface
{
    public function store(string $filename): string;
}