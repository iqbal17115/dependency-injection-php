<?php

namespace Classes;

use Interfaces\DatabaseConnectionInterface;

class PostgreSQLConnection implements DatabaseConnectionInterface
{
    public function connect()
    {
        return "Connected to PostgreSQL";
    }
}
