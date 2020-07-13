<?php

namespace Behavioral\Command;


class Invoker
{
    /**
     * @var CommandInterface
     */
    private $command;

    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }

}