<?php

namespace Creational\SimpleFactory;

class DataBaseFactory
{
    public function getDatabase(string $dbname)
    {
        if ($dbname == 'mysql') {
            return new MySQL();
        } else if ($dbname == 'oracle') {
            return new Oracle();
        }
    }
}
