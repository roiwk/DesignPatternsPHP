<?php

namespace Creational\SimpleFactory;

class MySQL extends AbstractDataBase
{
    public function connect()
    {
        echo '我要连接mysql';
    }
}