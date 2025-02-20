<?php
require('Assets/models/find.php');
require_once('Assets/models/otp.php');
require('Core/phpMailerConfig.php');
require_once('Assets/controllers/getLoggedInUser.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $otp = $_POST['otp'];
    $_SESSION['userId'] = $_POST['profId'];
    $profId = $_SESSION['userId'];
    $profile = find($profId);
    $path = $profile['image_path'];

    if (getLoggedInUser()['user_type'] === 'admin') {
        sendOTP($profile['firstname'], $profile['lastname'], getLoggedInUser()['email'], $otp);
        storeOTP($otp, $profId);
        $_SESSION['otpEmail'] = getLoggedInUser()['email'];
        $_SESSION['destroyData'] = ['path' => $path];
        header('Location: /basicPHPCRUD/otp');
        exit();
    } else {
        if (getLoggedInUser()['user_id'] === $profId) {
            sendOTP($profile['firstname'], $profile['lastname'], $profile['email'], $otp);
            storeOTP($otp, $profId);
            $_SESSION['otpEmail'] = $profile['email'];
            $_SESSION['destroyData'] = ['path' => $path];
            header('Location: /basicPHPCRUD/otp');
            exit();
        } else {
            $_SESSION['authError'] = 'You are not authorized to perform this action';
            header('location: /basicPHPCRUD/home');
            die();
        }
    }
}
