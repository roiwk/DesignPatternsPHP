<?php

namespace Creational\Builder;

use Creational\Builder\Meal\AbstractMeal;

interface BuildMealInterface
{
    public function createMeal();
    public function addStapleFood();
    public function addSnack();
    public function addDrink();
    public function getMeal(): AbstractMeal;
}