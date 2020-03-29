<?php

namespace Creational\Builder;

use Creational\Builder\Meal\AbstractMeal;
use Creational\Builder\Meal\MealB;
use Creational\Builder\Meal\Parts\Hamburger;
use Creational\Builder\Meal\Parts\FrenchFries;
use Creational\Builder\Meal\Parts\Sprite;

/**
 * 套餐A: 2汉堡+1薯条+1雪碧
 */
class MealBBuilder implements BuildMealInterface
{
    /**
     * @var MealB
     */
    private $meal;

    public function createMeal()
    {
        $this->meal = new MealB();
    }
    public function addStapleFood()
    {
        $this->meal->setPart('stapleFood', [new Hamburger(), new Hamburger()]);
    }

    public function addSnack()
    {
        $this->meal->setPart('snack', [new FrenchFries()]);
    }

    public function addDrink()
    {
        $this->meal->setPart('drink', [new Sprite()]);
    }

    public function getMeal(): AbstractMeal
    {
        return $this->meal;
    }
}