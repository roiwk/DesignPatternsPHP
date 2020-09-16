<?php

namespace Behavioral\Mediator;

class UserRepository extends AbstractColleague
{
    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }
}