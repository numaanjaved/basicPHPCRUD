<?php

unset($_SESSION['inputs']);
require('Assets/models/update.php');
require_once('Core/Validate.php');
require('Core/phpMailerConfig.php');

use Core\Validate;

$otp = htmlspecialchars($_POST['otp']);
$userId = htmlspecialchars($_POST["userId"]);
$imageName = htmlspecialchars($_POST["image_name"]);
$imagePath = htmlspecialchars($_POST["image_path"]);
$firstName = htmlspecialchars($_POST["user_Fname"]);
$lastName = htmlspecialchars($_POST["user_Lname"]);
$userEmail = htmlspecialchars($_POST["user_email"]);
$userContact = htmlspecialchars($_POST["user_contact"]);
$userAddress = htmlspecialchars($_POST["user_address"]);
$userType = htmlspecialchars($_POST["select_user"]);
$userBio = htmlspecialchars($_POST["user_bio"]);
$image = 'image';
$validation = new Validate();
function Validate($validation, $imageName, $imagePath, $image, $firstName, $lastName, $userEmail, $userContact, $userAddress, $userBio)
{
    $validationCheck = true;
    if (!$validation->Validator($firstName, 1, 50, '/^[A-Za-z]+(?:[- ][A-Za-z]+)*$/', 'First Name')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($lastName, 1, 50, '/^[A-Za-z]+(?:[- ][A-Za-z]+)*$/', 'Last Name')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($userEmail, 1, 255, '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', 'Email')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($userContact, 5, 20, '/^\+?[0-9]+$/', 'Contact')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($userAddress, 1, 255, "/^[a-zA-Z0-9\s,.'-]*$/", 'Address')) {
        $validationCheck = false;
    }
    if (!$validation->Validator($userBio, 1, 300, '/^[a-zA-Z0-9\s.,!?"\'\-\(\)&\n]+$/', 'Bio')) {
        $validationCheck = false;
    }
    if (!isset($imagePath) && !isset($imageName) && !$validation->imageValidator($image, 'User Picture')['validationCheck']) {
        $validationCheck = false;
    }
    return $validationCheck;
}

if (Validate($validation, $imageName, $imagePath, $image, $firstName, $lastName, $userEmail, $userContact,   $userAddress, $userBio)) {
    removeOldImage($validation->imageValidator('image', 'User Picture')['imagePath'], $imagePath);
    $imageName = $validation->imageValidator('image', 'User Picture')['imageName'] ? $validation->imageValidator('image', 'User Picture')['imageName'] : $imageName;
    $imagePath = $validation->imageValidator('image', 'User Picture')['imagePath'] ? $validation->imageValidator('image', 'User Picture')['imagePath'] : $imagePath;
    update($userId, $imageName, $imagePath, $firstName, $lastName, $userEmail, $userContact, $userAddress, $userBio, $userType, $otp);
    sendOTP($firstName, $lastName, $userEmail, $otp);
    $_SESSION['userId'] = $userId;
    $_SESSION['otpEmail'] = $userEmail;
    header('location:/basicPHPCRUD/otp');
    exit();
} else {
    $_SESSION['inputs'] = [
        'userId' => $userId,
        'firstName' =>  $firstName,
        'lastName' => $lastName,
        'email' =>  $userEmail,
        'contact' =>  $userContact,
        'address' => $userAddress,
        'bio' =>  $userBio,
        'userType' =>  $userType,
        'imagePath' => $imagePath,
        'imageName' => $imageName
    ];
    header('location:/basicPHPCRUD/updaterecord');
    exit();
}
