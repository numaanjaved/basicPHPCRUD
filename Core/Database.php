<?php

namespace Core;

use PDO;
use PDOException;
use Exception;

class Database
{
    protected $connection;
    function __construct($config, $username, $password)
    {
        try {
            $dsn = 'mysql:' . http_build_query($config, '', ';');
            $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $err) {
            die('Error Occurred While Connection Database: ' . $err->getMessage());
        }
    }
    public function query($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (Exception $err) {
            die('Error Occurred While Fetching Data: ' . $err->getMessage());
        }
    }
}
