<?php

namespace Behavioral\Mediator;

interface MediatorInterface
{
    public function getUser(string $username): string;
}