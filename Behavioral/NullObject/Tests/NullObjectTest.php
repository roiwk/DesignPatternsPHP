<?php

namespace Behavioral\NullObject\Tests;

use Behavioral\NullObject\NullLogger;
use Behavioral\NullObject\PrintLogger;
use Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSth();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('Behavioral\NullObject\Service::doSth called!');
        $service->doSth();
    }
}