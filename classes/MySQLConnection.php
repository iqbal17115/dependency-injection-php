<?php

namespace Classes;

use Interfaces\DatabaseConnectionInterface;

class MySQLConnection implements DatabaseConnectionInterface
{
    public function connect()
    {
        return "Connected to MySQL";
    }
}
