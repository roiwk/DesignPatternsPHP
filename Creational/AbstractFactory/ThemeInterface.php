<?php

namespace Creational\AbstractFactory;

/**
 * 主题有颜色和样式
 * 实现主题需要：描绘样式，填充颜色
 */
interface ThemeInterface
{
    public function createStyleDrawing(): StyleDrawingInterface;
    public function createColorFilling(): ColorFillingInterface;
}
