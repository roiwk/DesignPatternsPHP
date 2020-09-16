<?php

namespace Behavioral\Mediator\Tests;

use Behavioral\Mediator\UserInfo;
use Behavioral\Mediator\UserRepository;
use Behavioral\Mediator\UserRespositoryUserInfoMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputUserInfo()
    {
        $mediator = new UserRespositoryUserInfoMediator(new UserRepository(), new UserInfo());

        $this->expectOutputString('User: Test');
        $mediator->printInfoAbout('Test');
    }
}