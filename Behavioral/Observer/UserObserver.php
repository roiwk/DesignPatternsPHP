<?php

namespace Behavioral\Observer;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
    /**
     * @var array SplSubject[]
     */
    private $changedUsers = [];

    public function update(SplSubject $subject)
    {
        // 这里demo只保存了User对象, 具体业务时, 可能是给用户发送通知消息等
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return array SplSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}