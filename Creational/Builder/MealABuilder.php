<?php

namespace Creational\Builder;

use Creational\Builder\Meal\AbstractMeal;
use Creational\Builder\Meal\MealA;
use Creational\Builder\Meal\Parts\Hamburger;
use Creational\Builder\Meal\Parts\FriedChicken;
use Creational\Builder\Meal\Parts\Coke;

/**
 * 套餐A: 1汉堡+2炸鸡+1可乐
 */
class MealABuilder implements BuildMealInterface
{
    /**
     * @var MealA
     */
    private $meal;

    public function createMeal()
    {
        $this->meal = new MealA();
    }
    public function addStapleFood()
    {
        $this->meal->setPart('stapleFood', [new Hamburger()]);
    }

    public function addSnack()
    {
        $this->meal->setPart('snack', [new FriedChicken(), new FriedChicken()]);
    }

    public function addDrink()
    {
        $this->meal->setPart('drink', [new Coke()]);
    }

    public function getMeal(): AbstractMeal
    {
        return $this->meal;
    }
}