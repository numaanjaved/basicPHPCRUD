<?php
require_once('Assets/models/otp.php');
require_once('Assets/models/destroy.php');
require_once('Assets/models/store.php');
require_once('Assets/models/update.php');
require_once('Assets/controllers/updateCookies.php');
require_once('Assets/controllers/getLoggedInUser.php');

$firstDigit = $_POST['dig1'];
$secondDigit = $_POST['dig2'];
$thirdDigit = $_POST['dig3'];
$fourthDigit = $_POST['dig4'];
$fifthDigit = $_POST['dig5'];
$mailCode = intval($firstDigit . $secondDigit . $thirdDigit . $fourthDigit . $fifthDigit);
function validateOtp($mailCode)
{
    $validationCheck = true;
    $otp = findOTP($_SESSION['userId']);
    $otpCode = $otp['otp_code'];
    if ($otpCode !== $mailCode) {
        $validationCheck = false;
        $_SESSION['otpError'] = "Please Enter Valid Code.";
    }
    return $validationCheck;
}
if (validateOtp($mailCode)) {
    if (isset($_SESSION['RequestMode']) && ($_SESSION['RequestMode']  === 'Create')) {
        $dataArray = $_SESSION['userData'];
        extract($dataArray);
        store($userId, $imageName, $imagePath, $firstName, $lastName, $email, $contact, $address, $bio, $userType, $adminName, $adminPassword);
        unset($_SESSION['RequestMode']);
        unset($_SESSION['userData']);
    }
    if (isset($_SESSION['RequestMode']) && ($_SESSION['RequestMode'] === 'Update')) {
        $dataArray = $_SESSION['userData'];
        extract($dataArray);
        update($userId, $imageName, $imagePath, $firstName, $lastName, $userEmail, $userContact, $userAddress, $userBio, $userType);
        if (getLoggedInUser()['user_id'] === $userId) {
            updateCookies($userId);
        }
        unset($_SESSION['RequestMode']);
        unset($_SESSION['userData']);
    }
    if (isset($_SESSION['destroyData'])) {
        $path = $_SESSION['destroyData']['path'];
        destroy($_SESSION['userId'], $path);
        unset($_SESSION['destroyData']);
    }
    removeOTP($_SESSION['userId']);
    unset($_SESSION['userId']);
    unset($_SESSION['otpError']);
    unset($_SESSION['otpEmail']);
    header('location: /basicPHPCRUD/home');
    exit;
} else {
    header('location: /basicPHPCRUD/otp');
    exit;
}
