<?php

require_once('Core/Database.php');

use Core\Database;

function fetchAll()
{
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'SELECT * FROM `records`;';
    $statement =  $db->query($query);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (empty($result)) {
        $result = "No record Found";
    };
    return $result;
}
function fetchId()
{
    $IdsArr = [['user_id' => 'prof000'],];
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'SELECT `user_id` FROM `records`;';
    $statement =  $db->query($query);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($result)) {
        $IdsArr = $result;
    };
    return $IdsArr;
}
function extractIdDigit()
{
    $idArr = [];
    $UserIdsArr = fetchId();
    foreach ($UserIdsArr as $record) {
        $idString = $record['user_id'];
        $result = str_replace('prof00', '', $idString);
        $idArr[] = $result;
    }
    return $idArr;
}
function newId()
{
    $maxNum = 0;
    $numArr = extractIdDigit();
    if (empty($numArr)) {
        throw new Exception("No IDs found in the database.");
    }
    for ($i = 0; $i < count($numArr); $i++) {
        if ($numArr[$i] > $maxNum) {
            $maxNum = $numArr[$i];
        };
    }
    $newId = 'prof00' . $maxNum + 1;
    return $newId;
}
function store($userId, $imageName, $imagePath, $firstName, $lastName, $email, $contact, $address, $bio, $userType, $adminName = null, $adminPassword = null,)
{
    $hashedPwd = '';
    if ($adminPassword !== null && $adminPassword !== '') {
        $hashedPwd = password_hash($adminPassword, PASSWORD_BCRYPT);
    }
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'INSERT INTO `records`(user_id, image_path, image_name, firstname, lastname, email, contact, address, bio, user_type, admin_name, admin_password)VALUES(:userId, :imagePath, :imageName, :firstName, :lastName, :email, :contact, :address, :bio, :userType, :adminName, :adminPwd)';
    $params = [':userId' => $userId, ':imagePath' => $imagePath, ':imageName' => $imageName, ':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email, ':contact' => $contact, ':address' => $address, ':bio' => $bio, ':userType' => $userType, ':adminName' => $adminName, ':adminPwd' => $hashedPwd];
    $db->query($query, $params);
}
