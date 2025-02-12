<?php
require('Assets/controllers/sessions.php');
if (isset($_SESSION['username'])) {
    sessionUnset();
    header('location: /basicPHPCRUD/home');
    exit();
} else {
    header('location: /basicPHPCRUD/login');
    exit();
}
