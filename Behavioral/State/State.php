<?php

namespace Behavioral\State;


interface State
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}