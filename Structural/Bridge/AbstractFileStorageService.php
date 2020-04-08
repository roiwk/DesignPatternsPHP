<?php

namespace Structural\Bridge;

abstract class AbstractFileStorageService
{
    /**
     * @var StoreInterface
     */
    protected $implementation;

    public function __construct(StoreInterface $storage)
    {
        $this->implementation = $storage;
    }

    public function setImplementation(StoreInterface $storage)
    {
        $this->implementation = $storage;
    }

    abstract public function save(string $filename): string;
}