<?php

namespace Creational\AbstractFactory;

class BlackCompactFactory implements ThemeInterface
{
    public function createStyleDrawing(): StyleDrawingInterface
    {
        return new CompactStyle();
    }

    public function createColorFilling(): ColorFillingInterface
    {
        return new Black();
    }
}