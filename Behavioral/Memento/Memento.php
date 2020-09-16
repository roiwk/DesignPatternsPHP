<?php

namespace Behavioral\Memento;

class Memento
{
    /**
     * @var State
     */
    private $state;

    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState(): State
    {
        return $this->state;
    }
}