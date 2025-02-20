<?php
require_once('Assets/controllers/getLoggedInUser.php');
if (getLoggedInUser()['user_type'] === 'admin') {
    views('CRUD/create.view.php');
    exit();
} else {
    $_SESSION['authError'] = 'You are not authorized to perform this action';
    header('location: /basicPHPCRUD/home');
    die();
}
