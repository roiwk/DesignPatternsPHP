<?php

namespace Creational\Pool;

use DateTime;

class MysqlConnection
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function connect()
    {
        echo 'connect to mysql';
    }
}