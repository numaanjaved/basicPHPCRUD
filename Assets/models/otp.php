<?php

require_once('Core/Database.php');

use Core\Database;

function storeOTP($otp, $userId)
{
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'INSERT INTO `temp_otp`(`otp_code`, `user_id`)VALUES(:otp, :userId);';
    $params = [':otp' => $otp, ':userId' => $userId];
    $db->query($query, $params);
}
function removeOTP($userId)
{
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'DELETE FROM `temp_otp` WHERE `user_id`=:userId;';
    $params = [':userId' => $userId];
    $db->query($query, $params);
}
function findOTP($userId)
{
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'SELECT `otp_code` FROM `temp_otp` WHERE `user_id`=:userId;';
    $params = [':userId' => $userId];
    $statement = $db->query($query, $params);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}
