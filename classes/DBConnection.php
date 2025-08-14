<?php

namespace Classes;

use Interfaces\DatabaseConnectionInterface;

class DBConnection
{
    private $connection;

    public function __construct(DatabaseConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    public function connect()
    {
        return $this->connection->connect();
    }
}
