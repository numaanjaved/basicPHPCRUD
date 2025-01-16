<?php

require_once('Core/Database.php');

use Core\Database;

function find($profId)
{
    try {
        $config = require('Core/config.php');
        $db = new Database($config['database'], 'root', '');
        $query = 'SELECT * FROM `records` WHERE `user_id`=:id;';
        $statement =  $db->query($query, [':id' => $profId]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch (Exception $err) {
        die(throw new Exception('Unable to fetch record' . $err->getMessage()));
    }
}
