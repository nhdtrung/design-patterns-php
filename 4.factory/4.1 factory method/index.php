<?php

interface Connection
{
    public function execute();
}

class SQLLite3 implements Connection
{
    public function __construct()
    {
        echo 'SQL lite 3 database connection' . PHP_EOL;
    }

    public function execute()
    {
        echo "Your sql lite 3 select query execute here" . PHP_EOL;
    }
}

class MySQLConnector implements Connection
{
    public function __construct()
    {
        echo 'Mysql database connection' . PHP_EOL;
    }

    public function execute()
    {
        echo "Your mysql select query execute here" . PHP_EOL;
    }
}

class SQLServerConnector implements Connection
{
    public function __construct()
    {
        echo 'SQL Server database connection' . PHP_EOL;
    }

    public function execute()
    {
        echo "Your SQL server select query execute here" . PHP_EOL;
    }
}

class DBFacotory
{
    public static function getConn($dbType)
    {
        switch ($dbType) {
            case "MySQL":
                $dbObject = new MySQLConnector();
                break;
            case "SQLServer":
                $dbObject = new SQLServerConnector();
                break;
            default:
                $dbObject = new SQLLite3();
                break;
        }
        return $dbObject;
    }
}

$newConn = DBFacotory::getConn('MYSQL');
echo $newConn->execute();

// Change to another connector
echo "---Change to another connector---" . PHP_EOL;
$newConn = DBFacotory::getConn('SQLServer');
echo $newConn->execute();
