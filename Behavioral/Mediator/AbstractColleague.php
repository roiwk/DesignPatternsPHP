<?php

namespace Behavioral\Mediator;

abstract class AbstractColleague
{
    /**
     * 中介对象
     *
     * @var MediatorInterface
     */
    protected $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}