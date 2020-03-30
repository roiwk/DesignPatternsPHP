<?php

namespace Creational\Pool;

use Countable;

class MysqlPool implements Countable
{
    /**
     * 使用中的连接
     * @var MysqlConnection[]
     */
    private $occupiedConnections = [];

    /**
     * 闲置的连接
     * @var MysqlConnection[]
     */
    private $freeConnections = [];

    public function get(): MysqlConnection
    {
        if (count($this->freeConnections) == 0) {
            $connection = new MysqlConnection();
        } else {
            $connection = array_pop($this->freeConnections);
        }

        $this->occupiedConnections[spl_object_hash($connection)] = $connection;

        return $connection;
    }

    public function dispose(MysqlConnection $connection)
    {
        $key = spl_object_hash($connection);

        if (isset($this->occupiedConnections[$key])) {
            unset($this->occupiedConnections[$key]);
            $this->freeConnections[$key] = $connection;
        }
    }


    /**
     * @override
     *
     * @return integer
     */
    public function count(): int
    {
        return count($this->occupiedConnections) + count($this->freeConnections);
    }
}