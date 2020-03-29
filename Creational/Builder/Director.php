<?php

namespace Creational\Builder;

use Creational\Builder\Meal\AbstractMeal;

/**
 * Director （经理，理事，董事，(公司部门的)主任）
 * 它知道构建器的接口在构建器的帮助下构建一个复杂的对象，
 * 也可以注入许多构建器而不是一个来构建更复杂的对象
 */
class Director
{

    public function build(BuildMealInterface $builder): AbstractMeal
    {
        $builder->createMeal();
        $builder->addStapleFood();
        $builder->addSnack();
        $builder->addDrink();
        return $builder->getMeal();
    }
}