<?php

namespace Behavioral\State;


class StateDone implements State
{
    public function proceedToNext(OrderContext $context)
    {
        // 订单完成
    }

    public function toString(): string
    {
        return 'done';
    }
}
