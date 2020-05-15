<?php

namespace Structural\Proxy;

class AliMirrorProxy extends Packagist implements DownloadInterface
{
    public function download(): string
    {
        return 'Ali Mirror:downloading-' . $this->packageName;
    }
}