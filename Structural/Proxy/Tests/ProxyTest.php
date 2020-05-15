<?php

namespace Structural\Proxy\Tests;

use PHPUnit\Framework\TestCase;
use Structural\Proxy\AliMirrorProxy;


class ProxyTest extends TestCase
{

    public function testProxy()
    {
        $aliMirrorProxy = new AliMirrorProxy('roiwk/design-patterns-php-practice');
        $this->assertSame('Ali Mirror:downloading-roiwk/design-patterns-php-practice', $aliMirrorProxy->download());
    }

}