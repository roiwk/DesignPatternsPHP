<?php

namespace Behavioral\Command\Tests;

use Behavioral\Command\AddMessageDateCommand;
use Behavioral\Command\HelloWorldCommand;
use Behavioral\Command\Invoker;
use Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $invoker  = new Invoker();
        $receiver = new Receiver();
        $invoker->setCommand(new HelloWorldCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }

    public function testUndoableCommand()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloWorldCommand($receiver));
        $invoker->run();

        $this->assertSame('Hello World', $receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();
        $invoker->run();

        $this->assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());

        $messageDateCommand->undo();
        $invoker->run();

        $this->assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}
