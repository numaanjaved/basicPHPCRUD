<?php

require_once('Core/Database.php');

use Core\Database;

function update($userId, $imageName, $imagePath, $firstName, $lastName, $email, $contact, $address, $bio, $userType)
{
    try {
        $config = require('Core/config.php');
        $db = new Database($config['database'], 'root', '');
        $query = 'UPDATE `records` SET `user_id`=:id,`image_path`=:imgPath, `image_name`=:imgName, `firstname`=:firstName, `lastname`=:lastName, `email`=:email, `contact`=:contact,`address`=:address, `bio`=:bio,  `user_type`=:userType;';
        $params = [':id' => $userId, ':imgPath' => $imagePath, ':imgName' => $imageName, ':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email, ':contact' => $contact, ':address' => $address, ':bio' => $bio,  ':userType' => $userType];

        $db->query($query, $params);
    } catch (Exception $err) {
        die(throw new Exception('Error Occurred While updating Data in Database: ' . $err->getMessage()));
    }
}
