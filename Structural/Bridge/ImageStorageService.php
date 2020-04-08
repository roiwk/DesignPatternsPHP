<?php

namespace Structural\Bridge;

class ImageStorageService extends AbstractFileStorageService
{
    public function save(string $filename): string
    {
        return $this->implementation->store($filename);
    }
}