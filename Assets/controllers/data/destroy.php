<?php
require('Assets/models/destroy.php');
require('Assets/models/find.php');
require('Assets/models/otp.php');
require('Core/phpMailerConfig.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $otp = $_POST['otp'];
    $_SESSION['userId'] = $_POST['profId'];
    $profId = $_SESSION['userId'];
    $profile = find($profId);
    $path = $profile['image_path'];
    updateOTP($profId, $otp);
    sendOTP($profile['firstname'], $profile['lastname'], $profile['email'], $otp);
    $_SESSION['otpEmail'] = $profile['email'];
    $_SESSION['destroyData'] = ['path' => $path];
    header('Location: /basicPHPCRUD/otp');
    exit();
}
