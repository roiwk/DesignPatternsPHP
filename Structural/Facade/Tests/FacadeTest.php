<?php

namespace Structural\Facade\Tests;

use Structural\Facade\BiosInterface;
use Structural\Facade\Facade;
use Structural\Facade\OperatingSystemInterface;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperatingSystemInterface::class);
        $bios = $this->createMock(BiosInterface::class);

        $os->method('getName')
            ->will($this->returnValue('Linux'));
        $bios->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}