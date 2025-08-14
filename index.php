<?php
require_once __DIR__ . '/vendor/autoload.php';

use Classes\DBConnection;
use Classes\MySQLConnection;
use Classes\OracleConnection;
use Classes\PostgreSQLConnection;

// initializing the Connections
$mysql = new MySQLConnection();
$oracle = new OracleConnection();
$postgresql = new PostgreSQLConnection();

// using the MySQL connection
$connection = new DBConnection($postgresql);

// connecting to the database
echo $connection->connect();
