<?php

namespace Structural\Bridge;


class DiskStorage implements StoreInterface
{
    public function store(string $filename): string
    {
        return 'disk:' . $filename;
    }
}