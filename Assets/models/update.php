<?php

require_once('Core/Database.php');

use Core\Database;

function update($userId, $imageName, $imagePath, $firstName, $lastName, $email, $contact, $address, $bio, $userType)
{
    try {
        $config = require('Core/config.php');
        $db = new Database($config['database'], 'root', '');
        $query = 'UPDATE `records` SET `image_path`=:imgPath, `image_name`=:imgName, `firstname`=:firstName, `lastname`=:lastName, `email`=:email, `contact`=:contact,`address`=:address, `bio`=:bio,  `user_type`=:userType WHERE `user_id`=:id;';
        $params = [':imgPath' => $imagePath, ':imgName' => $imageName, ':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email, ':contact' => $contact, ':address' => $address, ':bio' => $bio,  ':userType' => $userType, ':id' => $userId];

        $db->query($query, $params);
    } catch (Exception $err) {
        die(throw new Exception('Error Occurred While updating Data in Database: ' . $err->getMessage()));
    }
}
