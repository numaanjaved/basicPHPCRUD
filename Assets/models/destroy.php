<?php

require_once('Core/Database.php');

use Core\Database;

function destroy($profId)
{
    try {
        $config = require('Core/config.php');
        $db = new Database($config['database'], 'root', '');
        $query = 'DELETE FROM `records` WHERE `user_id`= :id;';
        $db->query($query, [':id' => $profId]);
    } catch (Exception $err) {
        die(throw new Exception('Error Occurred While Deleting Record.' . $err->getMessage()));
    }
}
