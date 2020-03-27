<?php

namespace Creational\AbstractFactory;

class BlueLooseFactory implements ThemeInterface
{
    public function createStyleDrawing(): StyleDrawingInterface
    {
        return new LooseStyle();
    }

    public function createColorFilling(): ColorFillingInterface
    {
        return new Blue();
    }
}