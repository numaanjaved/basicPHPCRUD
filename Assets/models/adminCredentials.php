<?php
require_once('Core/Database.php');

use Core\Database;

function adminCre()
{
    $credentials = [];
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'SELECT * FROM `records` WHERE `user_type`="admin";';
    $statement =  $db->query($query);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $credentials['adminName'] = $result['admin_name'];
    $credentials['adminPassword'] = $result['admin_password'];
    return $credentials;
}
