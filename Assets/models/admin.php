<?php
require_once('Core/Database.php');

use Core\Database;

function findAdmin()
{
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'SELECT `user_type` FROM `records`;';
    $statement =  $db->query($query);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $adminCheck = false;
    if (!empty($result)) {
        foreach ($result as $record) {
            if ($record['user_type'] === 'admin') {
                $adminCheck = true;
            };
        }
    };
    return $adminCheck;
}
