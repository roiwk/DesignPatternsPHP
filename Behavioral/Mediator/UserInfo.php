<?php

namespace Behavioral\Mediator;

class UserInfo extends AbstractColleague
{
    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}