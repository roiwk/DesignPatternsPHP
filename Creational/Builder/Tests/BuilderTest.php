<?php

namespace Creational\Builder\Tests;

use Creational\Builder\Director;
use Creational\Builder\MealABuilder;
use Creational\Builder\MealBBuilder;
use Creational\Builder\Meal\MealA;
use Creational\Builder\Meal\MealB;
use PHPUnit\Framework\TestCase;

class BuildTest extends TestCase
{
    public function testCanBuildMealA()
    {
        $newMeal = (new Director())->build(new MealABuilder());
        $this->assertInstanceOf(MealA::class, $newMeal);
    }

    public function testCanBuildMealB()
    {
        $newMeal = (new Director())->build(new MealBBuilder());
        $this->assertInstanceOf(MealB::class, $newMeal);
    }
}