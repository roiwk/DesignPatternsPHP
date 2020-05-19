<?php

namespace Structural\DataMapper;

class User
{
    private $username;
    private $email;

    public static function fromState(array $state): User
    {
        // todo: 校验$state中username和email字段
        return new self(
            $state['username'],
            $state['email']
        );
    }

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}