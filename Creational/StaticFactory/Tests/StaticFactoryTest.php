<?php

namespace Creational\StaticFactory\Tests;

use InvalidArgumentException;
use Creational\StaticFactory\FormatFactory;
use Creational\StaticFactory\FormatNumber;
use Creational\StaticFactory\FormatString;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanFormatString()
    {
        $this->assertInstanceOf(FormatString::class, FormatFactory::factory('string'));
    }

    public function testCanFormatNumber()
    {
        $this->assertInstanceOf(FormatNumber::class, FormatFactory::factory('number'));
    }
}