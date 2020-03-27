<?php

namespace Creational\AbstractFactory;

class Black implements ColorFillingInterface
{
    public function fill()
    {
        echo '黑色';
    }
}