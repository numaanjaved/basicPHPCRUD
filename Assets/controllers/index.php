<?php
require('Assets/controllers/sessions.php');
require('Assets/models/admin.php');
if (isset($_SESSION['username'])) {
    sessionUnset();
    header('location: /basicPHPCRUD/home');
    exit();
} else {
    if (!findAdmin()) {
        header('location: /basicPHPCRUD/noAdmin');
        die();
    } else {
        header('location: /basicPHPCRUD/login');
        die();
    };
}
