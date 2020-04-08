<?php

namespace Structural\Bridge;

class VideoStorageService extends AbstractFileStorageService
{
    public function save(string $filename): string
    {
        return $this->implementation->store($filename);
    }
}