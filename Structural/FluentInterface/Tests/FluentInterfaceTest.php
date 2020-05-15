<?php

namespace Structural\FluentInterface\Tests;

use PHPUnit\Framework\TestCase;
use Structural\FluentInterface\Sql;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL()
    {
        $query = (new Sql())
                    ->select(['a', 'b'])
                    ->from('ab', 'AB')
                    ->where('AB.b = ?');

        $this->assertSame('SELECT a, b FROM ab AS AB WHERE AB.b = ?', (string) $query);
    }
}