<?php

namespace Structural\Proxy;


class Packagist implements DownloadInterface
{
    protected $packageName;

    public function __construct(string $packageName)
    {
        $this->packageName = $packageName;
    }

    public function download(): string
    {
        return 'Packagist:downloading-' . $this->packageName;
    }
}