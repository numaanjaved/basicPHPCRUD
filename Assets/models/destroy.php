<?php

require_once('Core/Database.php');

use Core\Database;

function destroy($profId, $filePath)
{
    try {
        deletePicture($filePath);
        $config = require('Core/config.php');
        $db = new Database($config['database'], 'root', '');
        $query = 'DELETE FROM `records` WHERE `user_id`= :id;';
        $db->query($query, [':id' => $profId]);
    } catch (Exception $err) {
        die(throw new Exception('Error Occurred While Deleting Record.' . $err->getMessage()));
    }
}
function deletePicture($filePath)
{
    $check = true;
    if (file_exists($filePath)) {
        unlink($filePath);
    } else {
        $check = false;
    }
    return $check;
}

function findPath($profId)
{
    $config = require('Core/config.php');
    $db = new Database($config['database'], 'root', '');
    $query = 'SELECT `image_path` FROM `records` WHERE `user_id`= :id;';
    $result = $db->query($query, [':id' => $profId])->fetchColumn();
    return $result;
}
