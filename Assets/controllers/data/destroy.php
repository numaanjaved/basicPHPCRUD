<?php
require('Assets/models/destroy.php');
require('Assets/models/find.php');
require_once('Assets/models/otp.php');
require('Core/phpMailerConfig.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $otp = $_POST['otp'];
    $_SESSION['userId'] = $_POST['profId'];
    $profId = $_SESSION['userId'];
    $profile = find($profId);
    $path = $profile['image_path'];
    sendOTP($profile['firstname'], $profile['lastname'], $profile['email'], $otp);
    storeOTP($otp, $profId);
    $_SESSION['otpEmail'] = $profile['email'];
    $_SESSION['destroyData'] = ['path' => $path];
    header('Location: /basicPHPCRUD/otp');
    exit();
}
