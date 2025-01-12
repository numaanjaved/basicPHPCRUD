<?php

require_once('Core/Validate.php');
require_once('Assets/models/store.php');

use Core\Validate;

$firstName = htmlspecialchars($_POST['user_Fname']);
$lastName = htmlspecialchars($_POST['user_Lname']);
$email = htmlspecialchars($_POST['user_email']);
$contact = htmlspecialchars($_POST['user_contact']);
$address = htmlspecialchars($_POST['user_address']);
$bio = htmlspecialchars($_POST['user_bio']);
$userType = htmlspecialchars($_POST['select_user']);
$adminName = htmlspecialchars($_POST['admin_name']);
$adminPassword = htmlspecialchars($_POST['admin_password']);

function Validate($firstName, $lastName, $email, $contact, $address, $bio, $userType, $adminName = null, $adminPassword = null)
{
    $validationCheck = true;
    $validation = new Validate();
    if (!$validation->Validator($firstName, 1, 50, '/^[A-Za-z]+(?:[- ][A-Za-z]+)*$/')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($lastName, 1, 50, '/^[A-Za-z]+(?:[- ][A-Za-z]+)*$/')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($email, 1, 255, '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($contact, 5, 20, '/^\+?[0-9]+$/')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($address, 1, 255, "/^[a-zA-Z0-9\s,.'-]*$/")) {
        $validationCheck = false;
    }
    if (!$validation->Validator($bio, 1, 300, '/^[a-zA-Z0-9\s.,!?"\'\-\(\)&\n]+$/')) {
        $validationCheck = false;
    }
    if ($userType === 'Admin') {
        if (!$validation->Validator($adminName, 1, 50, "/^[a-zA-Z0-9_]$/")) {
            $validationCheck = false;
        }
        if (!$validation->Validator($adminPassword, 7, 255, "/^[a-zA-Z0-9@#$&_\-+\/\\\\]$/")) {
            $validationCheck = false;
        }
    }
    return $validationCheck;
}

if (Validate($firstName, $lastName, $email, $contact,   $address, $bio, $userType)) {
    store($firstName, $lastName, $email, $contact, $address, $bio, $userType, $adminName, $adminPassword);
    header('location:/basicPHPCRUD/');
    exit();
} else {
    header('location:/basicPHPCRUD/');
    exit();
}
