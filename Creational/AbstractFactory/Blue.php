<?php

namespace Creational\AbstractFactory;

class Blue implements ColorFillingInterface
{
    public function fill()
    {
        echo '蓝色';
    }
}