<?php

require_once('Core/Validate.php');
require_once('Assets/models/loggedInUser.php');
require_once('Assets/controllers/sessions.php');

use Core\Validate;

$username = htmlspecialchars($_POST['login_userName']);
$password = htmlspecialchars($_POST['login_userPassword']);


function loginValidate($username, $password)
{
    $validate = new Validate();
    $validationCheck = true;
    if (!$validate->loginValidator($username, $password)) {
        $validationCheck = false;
    }
    return $validationCheck;
};

if (loginValidate($username, $password)) {
    $expireTime = time() + (60 * 60 * 24 * 7);
    $loggedInUser =  json_encode(loggedInUser($username));
    setcookie('loginInfo', $loggedInUser, $expireTime, '/');
    cookieSet($username);
    header('location: /basicPHPCRUD/');
    exit;
} else {
    header('location: /basicPHPCRUD/login');
    exit;
};
