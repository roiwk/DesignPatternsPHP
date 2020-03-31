<?php

namespace Creational\Singleton\Tests;

use Creational\Singleton\DB;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = DB::getInstance();
        $secondCall = DB::getInstance();

        $this->assertInstanceOf(DB::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}