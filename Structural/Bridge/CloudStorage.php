<?php

namespace Structural\Bridge;


class CloudStorage implements StoreInterface
{
    public function store(string $filename): string
    {
        return 'cloud:'. $filename;
    }
}