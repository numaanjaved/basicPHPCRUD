<?php
require 'Assets/models/find.php';
require('Assets/models/destroy.php');

if ($_SERVER['REQUEST_METHOD']) {
    $firstDigit = $_POST['dig1'];
    $secondDigit = $_POST['dig2'];
    $thirdDigit = $_POST['dig3'];
    $fourthDigit = $_POST['dig4'];
    $fifthDigit = $_POST['dig5'];
    $mailCode = intval($firstDigit . $secondDigit . $thirdDigit . $fourthDigit . $fifthDigit);
    function validateOtp($mailCode)
    {
        $validationCheck = true;
        $profileId = find($_SESSION['userId']);
        $otp = $profileId['otp'];
        if ($otp !== $mailCode) {
            $validationCheck = false;
            $_SESSION['otpError'] = "Please Enter Valid Code.";
        }
        return $validationCheck;
    }
    if (validateOtp($mailCode)) {
        if (isset($_SESSION['destroyData'])) {
            $path = $_SESSION['destroyData']['path'];
            destroy($_SESSION['userId'], $path);
        }
        destroy($profId, $path);
        unset($_SESSION['destroyData']);
        unset($_SESSION['userId']);
        unset($_SESSION['otpError']);
        unset($_SESSION['otpEmail']);
        header('location: /basicPHPCRUD/read');
        exit;
    } else {
        header('location: /basicPHPCRUD/otp');
        exit;
    }
}
