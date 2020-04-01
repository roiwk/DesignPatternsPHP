<?php

namespace Creational\Prototype;

class EnglistBookPrototype extends BookPrototype
{
    protected $category = 'English';

    public function __clone()
    {

    }
}