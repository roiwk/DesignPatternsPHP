<?php

namespace Structural\Facade;

interface OperatingSystemInterface
{
    public function halt();

    public function getName(): string;
}