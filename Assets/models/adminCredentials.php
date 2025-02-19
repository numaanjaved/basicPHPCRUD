<?php
require_once('Core/Database.php');

use Core\Database;

function loginCre($username)
{
    $credentials = [];
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'SELECT * FROM `records` WHERE `admin_name`=:username;';
    $statement =  $db->query($query, [':username' => $username]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    // $credentials['adminName'] = $result['admin_name'];
    // $credentials['adminPassword'] = $result['admin_password'];
    $credentials = $result;
    return $credentials;
}
