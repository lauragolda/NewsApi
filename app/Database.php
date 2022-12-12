<?php

namespace App;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;

class Database
{
    private static ?Connection $connection = null;

    public static function getConnection(): ?Connection
    {
        if (self::$connection == null) {
            $databasePassword = $_ENV['DATABASE_PASSWORD'];
            $connectionParams = [
                'dbname' => 'newsApi',
                'user' => $_ENV['DB_USER'],
                'password' => $_ENV['DB_PASSWORD'],
                'host' => 'localhost',
                'driver' => 'pdo_mysql',
            ];
            self::$connection = DriverManager::getConnection($connectionParams);
        }

        return self::$connection;
    }
}