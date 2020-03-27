<?php

namespace Creational\AbstractFactory\Tests;

use Creational\AbstractFactory\ThemeInterface;
use Creational\AbstractFactory\ColorFillingInterface;
use Creational\AbstractFactory\StyleDrawingInterface;
use Creational\AbstractFactory\BlackCompactFactory;
use Creational\AbstractFactory\BlueLooseFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new BlackCompactFactory()],
            [new BlueLooseFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     *
     * @param ThemeInterface $theme
     */
    public function testCanCreateTheme(ThemeInterface $theme)
    {
        $this->assertInstanceOf(StyleDrawingInterface::class, $theme->createStyleDrawing());
        $this->assertInstanceOf(ColorFillingInterface::class, $theme->createColorFilling());
    }
}