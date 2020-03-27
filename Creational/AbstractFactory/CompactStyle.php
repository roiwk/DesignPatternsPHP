<?php

namespace Creational\AbstractFactory;

class CompactStyle implements StyleDrawingInterface
{
    public function draw()
    {
        echo '紧凑型样式';
    }
}