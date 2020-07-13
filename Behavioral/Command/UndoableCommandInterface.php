<?php

namespace Behavioral\Command;

interface UndoableCommandInterface extends CommandInterface
{
    public function undo();
}