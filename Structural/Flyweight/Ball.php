<?php

namespace Structural\Flyweight;

class Ball implements ShowInterface
{
    private $color;
    private $num = 0;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function setNum(int $num)
    {
        $this->num = $num;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNum(): int
    {
        return $this->num;
    }

    public function show(): string
    {
        return $this->color . $this->num;
    }
}