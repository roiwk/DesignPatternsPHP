<?php

namespace Creational\Prototype;

class ChineseBookPrototype extends BookPrototype
{
    protected $category = 'Chinese';

    public function __clone()
    {

    }
}