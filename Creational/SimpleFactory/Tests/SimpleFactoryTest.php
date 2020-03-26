<?php

namespace Creational\SimpleFactory\Tests;

use Creational\SimpleFactory\DataBaseFactory;
use Creational\SimpleFactory\MySQL;
use Creational\SimpleFactory\Oracle;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCreateMySQL()
    {
        $dbFactory = new DataBaseFactory();
        $mysql = $dbFactory->getDatabase('mysql');

        $this->assertInstanceOf(MySQL::class, $mysql);
    }

    public function testCreateOracle()
    {
        $dbFactory = new DataBaseFactory();
        $oracle = $dbFactory->getDatabase('oracle');

        $this->assertInstanceOf(Oracle::class, $oracle);
    }
}