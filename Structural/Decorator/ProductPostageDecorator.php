<?php

namespace Structural\Decorator;

class ProductPostageDecorator implements FeeInterface
{
    private const FEE = 5;

    protected $product;

    public function __construct(FeeInterface $product)
    {
        $this->product = $product;
    }

    public function calcPrice(): float
    {
        return $this->product->calcPrice() + self::FEE;
    }
}