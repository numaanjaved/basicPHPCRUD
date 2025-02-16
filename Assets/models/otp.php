<?php

require_once('Core/Database.php');

use Core\Database;

function updateOTP($userId, $otp)
{
    try {
        $config = require('Core/config.php');
        $db = new Database($config['database'], 'root', '');
        $query = 'UPDATE `records` SET `otp`=:otp WHERE `user_id`=:id;';
        $params = [':otp' => $otp, ':id' => $userId];
        $db->query($query, $params);
    } catch (Exception $err) {
        die(throw new Exception('Error Occurred While updating OTP in Database: ' . $err->getMessage()));
    }
}
