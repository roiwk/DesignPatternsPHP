<?php

namespace Structural\Decorator;

class Product implements FeeInterface
{
    private $name;
    private $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function calcPrice(): float
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }

}