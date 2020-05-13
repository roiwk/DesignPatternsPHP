<?php

namespace Structural\Decorator\Tests;

use PHPUnit\Framework\TestCase;
use Structural\Decorator\Product;
use Structural\Decorator\ProductPostageDecorator;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $product = new Product('Product A', 12.5);
        $postageDecorator = new ProductPostageDecorator($product);

        $this->assertSame(17.5, $postageDecorator->calcPrice());
    }

}