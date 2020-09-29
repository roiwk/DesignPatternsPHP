<?php

namespace Behavioral\Observer\Tests;

use Behavioral\Observer\User;
use Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('123@qq.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}