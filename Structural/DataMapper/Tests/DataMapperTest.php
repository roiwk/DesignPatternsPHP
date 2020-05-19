<?php

namespace Structural\DataMapper\Tests;

use PHPUnit\Framework\TestCase;
use Structural\DataMapper\User;
use Structural\DataMapper\UserMapper;
use Structural\DataMapper\StorageAdapter;
use InvalidArgumentException;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'test', 'email' => 'test@gmail.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}