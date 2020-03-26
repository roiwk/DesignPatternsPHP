<?php

namespace Creational\SimpleFactory;

class Oracle extends AbstractDataBase
{
    public function connect()
    {
        echo '我要连接Oracle';
    }
}