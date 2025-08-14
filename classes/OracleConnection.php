<?php

namespace Classes;

use Interfaces\DatabaseConnectionInterface;

class OracleConnection implements DatabaseConnectionInterface
{
    public function connect()
    {
        return "Connected to Oracle";
    }
}
