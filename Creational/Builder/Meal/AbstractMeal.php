<?php

namespace Creational\Builder\Meal;

abstract class AbstractMeal
{
    /**
     * @var array
     */
    private $data = [];

    public function setPart(string $key, array $value)
    {
        $this->data[$key] = $value;
    }
}