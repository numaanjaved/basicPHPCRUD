<?php
unset($_SESSION['inputs']);
require_once('Core/Validate.php');
require_once('Assets/models/store.php');
require('Assets/models/admin.php');
require('Core/phpMailerConfig.php');

use Core\Validate;

$otp = htmlspecialchars($_POST['otp']);
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
    if ($userType === 'Admin' && $validation->adminValidator('Existing Admin')) {
        $validationCheck = false;
    }
    if (!$validation->imageValidator($image, 'User Picture')['validationCheck']) {
        $validationCheck = false;
    }
    return $validationCheck;
}

if (Validate($validation, $image, $firstName, $lastName, $email, $contact,   $address, $bio, $userType, $adminName, $adminPassword)) {
    $imageName = isset($_SESSION['uploadedPictureName']) ?  $_SESSION['uploadedPictureName'] : $validation->imageValidator('image', 'User Picture')['imageName'];
    $imagePath = isset($_SESSION['uploadedPicturePath']) ? $_SESSION['uploadedPicturePath'] : $validation->imageValidator('image', 'User Picture')['imagePath'];
    $userId = (string)newId();
    store($userId, $imageName, $imagePath, $firstName, $lastName, $email, $contact, $address, $bio, $userType, $adminName, $adminPassword, $otp);
    sendOTP($firstName, $lastName, $email, $otp);
    $_SESSION['userId'] = $userId;
    unset($_SESSION['inputs']);
    unset($_SESSION['uploadedPicturePath']);
    unset($_SESSION['uploadedPictureName']);
    header('location: /basicPHPCRUD/otp');
    exit();
} else {
    if (!isset($_SESSION['uploadedPicturePath']) || $_SESSION['uploadedPicturePath'] === '') {
        $_SESSION['uploadedPicturePath'] = $validation->imageValidator('image', 'User Picture')['imagePath'];
    }
    if (!isset($_SESSION['uploadedPictureName']) ||   $_SESSION['uploadedPictureName'] === '') {
        $_SESSION['uploadedPictureName'] = $validation->imageValidator('image', 'User Picture')['imageName'];
    }
    $_SESSION['inputs'] = [
        'firstName' =>  $firstName,
        'lastName' => $lastName,
        'email' =>  $email,
        'contact' =>  $contact,
        'address' => $address,
        'bio' =>  $bio,
        'userType' =>  $userType,
        'adminName' =>  $adminName,
        'adminPwd' =>  $adminPassword
    ];
    header('location:/basicPHPCRUD/create');
    exit();
}
