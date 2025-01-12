<?php

require_once('Core/Database.php');

use Core\Database;

function store($firstName, $lastName, $email, $contact, $address, $bio, $userType, $adminName = null, $adminPassword = null,)
{
    $userId = 'prof1';
    $username = $firstName . $lastName;
    $hashedPwd = null;
    if ($adminPassword !== null) {
        $hashedPwd = password_hash($adminPassword, PASSWORD_BCRYPT);
    }
    $config = require_once('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'INSERT INTO `records`(user_id, username, email, contact, address, bio, user_type, admin_name, admin_password)VALUES(:userId, :userName, :email, :contact, :address, :bio, :userType, :adminName, :adminPwd)';
    $params = [':userId' => $userId, ':userName' => $username, ':email' => $email, ':contact' => $contact, ':address' => $address, ':bio' => $bio, ':userType' => $userType, ':adminName' => $adminName, ':adminPwd' => $hashedPwd];
    $db->query($query, $params);
}
