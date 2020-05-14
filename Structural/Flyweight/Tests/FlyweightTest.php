<?php

namespace Structural\Flyweight\Tests;

use PHPUnit\Framework\TestCase;
use stdClass;
use Structural\Flyweight\GenerateFactory;
use Structural\Flyweight\Ball;

class FlyweightTest extends TestCase
{
    public function testGenerateBalls()
    {

        $red_ball = GenerateFactory::getBall('red');
        $red_ball->setNum(12);

        $blue_ball = GenerateFactory::getBall('blue');
        $blue_ball->setNum(9);

        $this->assertSame('red12', $red_ball->show());
        $this->assertSame('blue9', $blue_ball->show());
    }

}
