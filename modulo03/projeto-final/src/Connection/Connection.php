<?php

declare(strict_types=1);

namespace App\Connection;

abstract class Connection{
    public static function getConnection(): \PDO
    {
        $database = 'db_store';
        $username = 'root';
        $password = 'Vanessa*01';

        return new \PDO('mysql:host=localhost:3306;dbname='.$database,$username,$password);
    }
}