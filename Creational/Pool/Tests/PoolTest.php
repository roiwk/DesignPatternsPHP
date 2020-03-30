<?php

namespace Creational\Pool\Tests;

use Creational\Pool\MysqlConnection;
use Creational\Pool\MysqlPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewConnectionFromPool()
    {
        $pool = new MysqlPool();
        $connection1 = $pool->get();
        $connection2 = $pool->get();

        $this->assertCount(2, $pool);
        $this->assertNotSame($connection1, $connection2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new MysqlPool();
        $connection1 = $pool->get();
        $pool->dispose($connection1);
        $connection2 = $pool->get();

        $this->assertCount(1, $pool);
        $this->assertSame($connection1, $connection2);
    }

}