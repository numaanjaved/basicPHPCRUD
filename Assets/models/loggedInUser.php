<?php

require_once('Assets/models/adminCredentials.php');

use Core\Database;


function loggedInUser($username)
{
    $loggedInUser = loginCre($username);
    return $loggedInUser;
}
