<?php
unset($_SESSION['inputs']);
require_once('Core/Validate.php');
require_once('Assets/models/store.php');
require('Assets/models/admin.php');

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
$image = 'image';

$validation = new Validate();
function Validate($validation, $image, $firstName, $lastName, $email, $contact, $address, $bio, $userType, $adminName = null, $adminPassword = null)
{
    $validationCheck = true;
    if (!$validation->Validator($firstName, 1, 50, '/^[A-Za-z]+(?:[- ][A-Za-z]+)*$/', 'First Name')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($lastName, 1, 50, '/^[A-Za-z]+(?:[- ][A-Za-z]+)*$/', 'Last Name')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($email, 1, 255, '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', 'Email')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($contact, 5, 20, '/^\+?[0-9]+$/', 'Contact')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($address, 1, 255, "/^[a-zA-Z0-9\s,.'-]*$/", 'Address')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($bio, 1, 300, '/^[a-zA-Z0-9\s.,!?"\'\-\(\)&\n]+$/', 'Bio')) {
        $validationCheck = false;
    }
    if ($userType === 'Admin') {
        if (!$validation->Validator($adminName, 1, 50, "/^[a-zA-Z0-9_]*$/", 'Admin Name')) {
            $validationCheck = false;
        }
        if (!$validation->Validator($adminPassword, 7, 255, "/^[a-zA-Z0-9_#@.&$]*$/", 'Admin Password')) {
            $validationCheck = false;
        }
    }
    if ($userType === 'Admin' && $validation->adminValidator()) {
        $validationCheck = false;
    }
    if (!$validation->imageValidation($image)['validationCheck']) {
        $validationCheck = false;
    }
    return $validationCheck;
}

if (Validate($validation, $image, $firstName, $lastName, $email, $contact,   $address, $bio, $userType, $adminName, $adminPassword)) {
    $imageName = $validation->imageValidation('image')['imageName'];
    $imagePath = $validation->imageValidation('image')['imagePath'];
    store($imageName, $imagePath, $firstName, $lastName, $email, $contact, $address, $bio, $userType, $adminName, $adminPassword);
    header('location:/basicPHPCRUD/records');
    exit();
} else {
    $_SESSION['inputs'] = [
        'firstName' =>  $firstName,
        'lastName' => $lastName,
        'email' =>  $email,
        'contact' =>  $contact,
        'address' => $address,
        'bio' =>  $bio,
        'userType' =>  $userType,
        'adminName' =>  $adminName,
        'adminPwd' =>  $adminPassword,
    ];
    header('location:/basicPHPCRUD/');
    exit();
}
