<?php

namespace Creational\AbstractFactory;

class LooseStyle implements StyleDrawingInterface
{
    public function draw()
    {
        echo '宽松型样式';
    }
}